<?php
/**
*
* @copyright (c) Derky <http://www.derky.nl>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace derky\sortablescaptcha\captcha;

/**
* Sortables captcha with extending of the QA captcha class.
*/
class sortables extends \phpbb\captcha\plugins\qa
{
	var $confirm_id;
	var $options_left;  // $answer in captcha_qa
	var $options_right; //
	var $question_ids;
	var $answer_ids = false;
	var $question_text;
	var $question_lang;
	var $question_sort;
	var $attempts = 0;
	var $type;
	var $solved = 0;

	protected $acp_form_key = 'acp_captcha_sortables';
	protected $acp_list_url;

	// Constants for $this->solved status
	const NOT_VALIDATED = 0;
	const SOLVED = 1;
	const INCORRECT = 2;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\cache\driver\driver_interface */
	protected $cache;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\log\log_interface */
	protected $log;

	/** @var \phpbb\request\request_interface */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var string */
	protected $table_sortables_questions;

	/** @var string */
	protected $table_sortables_answers;

	/** @var string */
	protected $table_sortables_confirm;

	/**
	 *
	 * @param \phpbb\db\driver\driver_interface		$db
	 * @param \phpbb\cache\driver\driver_interface	$cache
	 * @param \phpbb\config\config					$config
	 * @param \phpbb\log\log_interface				$log
	 * @param \phpbb\request\request_interface		$request
	 * @param \phpbb\template\template				$template
	 * @param \phpbb\user							$user
	 * @param string								$table_sortables_questions
	 * @param string								$table_sortables_answers
	 * @param string								$table_sortables_confirm
	 */
	public function __construct(\phpbb\db\driver\driver_interface $db, \phpbb\cache\driver\driver_interface $cache, \phpbb\config\config $config, \phpbb\log\log_interface $log, \phpbb\request\request_interface $request, \phpbb\template\template $template, \phpbb\user $user, $table_sortables_questions, $table_sortables_answers, $table_sortables_confirm)
	{
		$this->db = $db;
		$this->cache = $cache;
		$this->config = $config;
		$this->log = $log;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->table_sortables_questions = $table_sortables_questions;
		$this->table_sortables_answers = $table_sortables_answers;
		$this->table_sortables_confirm = $table_sortables_confirm;
	}

	/**
	* @param int $type  as per the CAPTCHA API docs, the type
	*/
	public function init($type)
	{
		// load our language file
		$this->user->add_lang_ext('derky/sortablescaptcha', 'captcha_sortables');

		// read input
		$this->confirm_id = $this->request->variable('sortables_confirm_id', '');

		$this->type = (int) $type;
		$this->question_lang = $this->user->lang_name;

		// we need all defined questions - shouldn't be too many, so we can just grab them
		// try the user's lang first
		$this->load_question_ids($this->user->lang_name);

		// fallback to the board default lang
		if (!sizeof($this->question_ids))
		{
			$this->load_question_ids($this->config['default_lang']);

			// Overwrite the question_lang because the comfirm table uses this as well.
			$this->question_lang = $this->config['default_lang'];
		}

		// okay, if there is a confirm_id, we try to load that confirm's state. If not, we try to find one
		if (!$this->load_answer() && (!$this->load_confirm_id() || !$this->load_answer()))
		{
			// we have no valid confirm ID, better get ready to ask something
			$this->select_question();
		}
	}

	/**
	 * Try to load the question ids for the specified language.
	 * Note that this function doe not return the question ids.
	 *
	 * @param string $lang_iso
	 */
	protected function load_question_ids($lang_iso)
	{
		$sql = 'SELECT question_id
				FROM ' . $this->table_sortables_questions . "
				WHERE lang_iso = '" . $this->db->sql_escape($lang_iso) . "'";
		$result = $this->db->sql_query($sql, 3600);

		while ($row = $this->db->sql_fetchrow($result))
		{
			$this->question_ids[$row['question_id']] = $row['question_id'];
		}
		$this->db->sql_freeresult($result);
	}

	/**
	*  API function - for the captcha to be available, it must have installed itself and there has to be at least one question in the board's default lang
	*/
	public function is_available()
	{
		// load language file for pretty display in the ACP dropdown
		$this->user->add_lang_ext('derky/sortablescaptcha', 'captcha_sortables');

		$sql = 'SELECT COUNT(question_id) AS question_count
			FROM ' . $this->table_sortables_questions . "
			WHERE lang_iso = '" . $this->db->sql_escape($this->config['default_lang']) . "'";
		$result = $this->db->sql_query($sql);
		$question_count = $this->db->sql_fetchfield('question_count');
		$this->db->sql_freeresult($result);

		return ((bool) $question_count);
	}

	/**
	*  API function
	*/
	public function has_config()
	{
		return true;
	}

	/**
	*  API function
	*/
	static public function get_name()
	{
		return 'CAPTCHA_SORTABLES';
	}

	/**
	*  API function - send the question to the template
	*/
	public function get_template()
	{
		if ($this->is_solved())
		{
			return false;
		}
		else
		{
			$this->template->assign_vars(array(
				'SORTABLES_CONFIRM_QUESTION'	=> $this->question_text,
				'SORTABLES_CONFIRM_ID'			=> $this->confirm_id,
				'SORTABLES_NAME_LEFT'			=> $this->name_left,
				'SORTABLES_NAME_RIGHT'			=> $this->name_right,
				'SORTABLES_DEFAULT_SORT'		=> (!$this->question_sort) ? 'LEFT' : 'RIGHT', // 0 = left, 1 = right
				'S_CONFIRM_CODE'				=> true,
				'S_TYPE'						=> $this->type,
			));

			return '@derky_sortablescaptcha/captcha_sortables.html';
		}
	}

	/**
	*  API function - we just display a mockup so that the captcha doesn't need to be installed
	*/
	public function get_demo_template()
	{
		return '@derky_sortablescaptcha/captcha_sortables_acp_demo.html';
	}

	/**
	*  API function
	*/
	public function get_hidden_fields()
	{
		$hidden_fields = array();

		// this is required - otherwise we would forget about the captcha being already solved
		if ($this->solved === $this::SOLVED)
		{
			$hidden_fields['sortables_options_left'] = $this->options_left;
			$hidden_fields['sortables_options_right'] = $this->options_right;
		}
		$hidden_fields['sortables_confirm_id'] = $this->confirm_id;
		return $hidden_fields;
	}

	/**
	*  API function, just the same from captcha_qa but with other table names
	*/
	public function garbage_collect($type = 0)
	{
		$sql = 'SELECT c.confirm_id
			FROM ' . $this->table_sortables_confirm . ' c
			LEFT JOIN ' . SESSIONS_TABLE . ' s
				ON (c.session_id = s.session_id)
			WHERE s.session_id IS NULL' .
				((empty($type)) ? '' : ' AND c.confirm_type = ' . (int) $type);
		$result = $this->db->sql_query($sql);

		if ($row = $this->db->sql_fetchrow($result))
		{
			$sql_in = array();

			do
			{
				$sql_in[] = (string) $row['confirm_id'];
			}
			while ($row = $this->db->sql_fetchrow($result));

			if (sizeof($sql_in))
			{
				$sql = 'DELETE FROM ' . $this->table_sortables_confirm . '
					WHERE ' . $this->db->sql_in_set('confirm_id', $sql_in);
				$this->db->sql_query($sql);
			}
		}
		$this->db->sql_freeresult($result);
	}

	/**
	*  API function - we don't drop the tables here, as that would cause the loss of all entered questions.
	*/
	public function uninstall()
	{
		$this->garbage_collect(0);
	}

	/**
	*  API function - create the tables needed for sortables captcha
	*/
	public function install()
	{
		// This is now handled by migrations when enabling this extension.
		// Because this class extends the Q&A captcha, this function needs to be specified here to prevent generation of the QA captcha tables.
	}

	/**
	*  API function - see what has to be done to validate
	*/
	public function validate()
	{
		$error = '';

		if (!sizeof($this->question_ids))
		{
			return false;
		}

		if (!$this->confirm_id)
		{
			$error = $this->user->lang['CONFIRM_QUESTION_WRONG'];
		}
		else
		{
			if ($this->check_answer())
			{
				$this->solved = $this::SOLVED;
			}
			else
			{
				$error = $this->user->lang['CONFIRM_QUESTION_WRONG'];
			}
		}

		if (strlen($error))
		{
			// okay, incorrect answer. Let's ask a new question.
			$this->new_attempt();
			$this->solved = $this::INCORRECT;

			return $error;
		}
		else
		{
			return false;
		}
	}

	/**
	*  Select a question
	*/
	public function select_question()
	{
		if (!sizeof($this->question_ids))
		{
			return false;
		}
		$this->confirm_id = md5(unique_id($this->user->ip));
		$this->question = (int) array_rand($this->question_ids);

		$sql = 'INSERT INTO ' . $this->table_sortables_confirm . ' ' . $this->db->sql_build_array('INSERT', array(
			'confirm_id'	=> (string) $this->confirm_id,
			'session_id'	=> (string) $this->user->session_id,
			'lang_iso'		=> (string) $this->question_lang,
			'confirm_type'	=> (int) $this->type,
			'question_id'	=> (int) $this->question,
		));
		$this->db->sql_query($sql);

		$this->load_answer();
	}

	/**
	* New Question, if desired.
	*/
	public function reselect_question()
	{
		if (!sizeof($this->question_ids))
		{
			return false;
		}

		$this->question = (int) array_rand($this->question_ids);
		$this->solved = $this::NOT_VALIDATED;

		$sql = 'UPDATE ' . $this->table_sortables_confirm . '
			SET question_id = ' . (int) $this->question . "
			WHERE confirm_id = '" . $this->db->sql_escape($this->confirm_id) . "'
				AND session_id = '" . $this->db->sql_escape($this->user->session_id) . "'";
		$this->db->sql_query($sql);

		$this->load_answer();
	}

	/**
	* Wrong answer, so we increase the attempts and use a different question.
	*/
	public function new_attempt()
	{
		// yah, I would prefer a stronger rand, but this should work
		$this->question = (int) array_rand($this->question_ids);
		$this->solved = $this::NOT_VALIDATED;

		$sql = 'UPDATE ' . $this->table_sortables_confirm . '
			SET question_id = ' . (int) $this->question . ",
				attempts = attempts + 1
			WHERE confirm_id = '" . $this->db->sql_escape($this->confirm_id) . "'
				AND session_id = '" . $this->db->sql_escape($this->user->session_id) . "'";
		$this->db->sql_query($sql);

		$this->load_answer();
	}


	/**
	* See if there is already an entry for the current session.
	*/
	public function load_confirm_id()
	{
		$sql = 'SELECT confirm_id
			FROM ' . $this->table_sortables_confirm . "
			WHERE
				session_id = '" . $this->db->sql_escape($this->user->session_id) . "'
				AND lang_iso = '" . $this->db->sql_escape($this->question_lang) . "'
				AND confirm_type = " . $this->type;
		$result = $this->db->sql_query_limit($sql, 1);
		$confirm_id = $this->db->sql_fetchfield('confirm_id');
		$this->db->sql_freeresult($result);

		if ($confirm_id)
		{
			$this->confirm_id = $confirm_id;
			return true;
		}
		return false;
	}

	/**
	* Look up everything we need and populate the instance variables.
	*/
	public function load_answer()
	{
		if (!strlen($this->confirm_id) || !sizeof($this->question_ids))
		{
			return false;
		}

		$sql = 'SELECT con.question_id, attempts, question_text, sort, name_left, name_right
			FROM ' . $this->table_sortables_confirm . ' con, ' . $this->table_sortables_questions . " qes
			WHERE con.question_id = qes.question_id
				AND confirm_id = '" . $this->db->sql_escape($this->confirm_id) . "'
				AND session_id = '" . $this->db->sql_escape($this->user->session_id) . "'
				AND qes.lang_iso = '" . $this->db->sql_escape($this->question_lang) . "'
				AND confirm_type = " . $this->type;
		$result = $this->db->sql_query($sql);
		$row = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		if ($row)
		{
			$this->question = $row['question_id'];
			$this->attempts = $row['attempts'];
			$this->question_sort = $row['sort'];
			$this->question_text = $row['question_text'];
			$this->name_left = $row['name_left'];
			$this->name_right = $row['name_right'];

			// Let's load the answers
			$sql = 'SELECT answer_id, answer_text
				FROM ' . $this->table_sortables_answers . "
				WHERE question_id = " . (int) $this->question . "
				ORDER BY " . $this->sql_random();
			$result = $this->db->sql_query($sql);

			$this->template->destroy_block_vars('options'); // It's running twice, only grab the lastest see topic 1732385
			$this->total_options = 0;
			while ($row = $this->db->sql_fetchrow($result))
			{
				$this->template->assign_block_vars('options', array(
					'ID'		=> $row['answer_id'],
					'TEXT'		=> $row['answer_text'],
				));
				$this->total_options++;
			}
			$this->db->sql_freeresult($result);
			return true;

		}

		return false;
	}

	/**
	*  The actual validation
	*/
	public function check_answer()
	{
		// Well how did the user sorted it
		$options_left = $this->request->variable('sortables_options_left', array(0));
		$options_right = $this->request->variable('sortables_options_right', array(0));

		// Make sure the didn't submitted more options then it should (like trying everything... left/right: options ^ 2 )
		if ($this->total_options === sizeof($options_left) + sizeof($options_right))
		{
			// Let's count how many options the user sorted correctly
			$sql = 'SELECT COUNT(*) AS total
							FROM ' . $this->table_sortables_answers . '
							WHERE question_id = ' . (int) $this->question . '
									AND ((answer_sort = 0 AND ' . $this->db->sql_in_set('answer_id', $options_left, false, true) . ')
									OR (answer_sort = 1 AND ' . $this->db->sql_in_set('answer_id', $options_right, false, true) .'))';
			$result = $this->db->sql_query($sql);
			$total_options_good = (int) $this->db->sql_fetchfield('total');

			// Now compare that amount with the total amount of options for this question
			if ($this->total_options === $total_options_good)
			{
				$this->solved = $this::SOLVED;
				// Remember this for the hidden fields
				$this->options_left = $options_left;
				$this->options_right = $options_right;
			}
			$this->db->sql_freeresult($result);
		}

		return ($this->solved === $this::SOLVED);
	}

	/**
	*  API function
	*/
	public function get_attempt_count()
	{
		return $this->attempts;
	}

	/**
	*  API function
	*/
	public function reset()
	{
		$sql = 'DELETE FROM ' . $this->table_sortables_confirm . "
				WHERE session_id = '" . $this->db->sql_escape($this->user->session_id) . "'
					AND confirm_type = " . (int) $this->type;
		$this->db->sql_query($sql);

		// we leave the class usable by generating a new question
		$this->select_question();
	}

	/**
	*  API function
	*/
	public function is_solved()
	{
		if ($this->request->variable('qa_answer', false) && $this->solved === $this::NOT_VALIDATED)
		{
			$this->validate();
		}
		return (bool) ($this->solved === $this::SOLVED);
	}


	/**
	*  API function - The ACP backend, this marks the end of the easy methods
	*/
	public function acp_page($id, &$module)
	{
		$this->user->add_lang('acp/board');
		$this->user->add_lang_ext('derky/sortablescaptcha', 'captcha_sortables');

		$module->tpl_name = '@derky_sortablescaptcha/captcha_sortables_acp';
		$module->page_title = 'ACP_VC_SETTINGS';
		add_form_key($this->acp_form_key);

		$question_id = $this->request->variable('question_id', 0);
		$action = $this->request->variable('action', '');
		$submit = $this->request->variable('submit', false);

		// we have two pages, so users might want to navigate from one to the other
		$this->acp_list_url = $module->u_action . "&amp;configure=1&amp;select_captcha=" . $this->get_service_name();

		$this->template->assign_vars(array(
			'U_ACTION'		=> $module->u_action,
			'QUESTION_ID'	=> $question_id ,
			'CLASS'			=> $this->get_service_name(),
			'U_LIST'		=> $this->acp_list_url,
		));

		// Show the list?
		if (!$question_id && $action != 'add')
		{
			$this->acp_question_list($module);
		}
		// Delete question
		else if ($question_id && $action == 'delete')
		{
			// Show confirm box and check for last question
			$this->acp_question_delete_confirm($question_id);
		}
		else // Add or edit question
		{
			$this->acp_add_or_edit_question($question_id, $submit);
		}
	}

	/**
	 * Handle the ACP page for adding/editing questions. Validate input, display errors and save to database.
	 *
	 * @param int $question_id
	 * @param boolean $submit Determines if the editor should just be shown or that it should be validated/saved.
	 */
	protected function acp_add_or_edit_question($question_id = 0, $submit = false)
	{
		// Load question data if $question_id exists
		$question = array(); // Make code analyzer happy
		if ($question_id && !$question = $this->acp_get_question_data($question_id))
		{
			// Display an error when question not found
			trigger_error($this->user->lang['FORM_INVALID'] . adm_back_link($this->acp_list_url));
		}

		// Get possible question input data
		$question_input = $this->acp_get_question_input();

		// When the form submitted
		if ($submit && check_form_key($this->acp_form_key))
		{
			if (!$this->validate_input($question_input))
			{
				$this->template->assign_vars(array(
					'S_ERROR'			=> true,
				));
			}
			else
			{
				if ($question_id)
				{
					$this->acp_update_question($question_input, $question_id);
				}
				else
				{
					$this->acp_insert_question($question_input);
				}

				$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_CONFIG_VISUAL');
				trigger_error($this->user->lang['CONFIG_UPDATED'] . adm_back_link($this->acp_list_url));
			}
		}
		else if ($submit)
		{
			trigger_error($this->user->lang['FORM_INVALID'] . adm_back_link($this->acp_list_url), E_USER_WARNING);
		}

		// If no trigger_error has kicked in yet, display the question fields
		// Use the $question_input when the form is submitted and a validation error has occured or
		// when showing the editor for a new question ($question_input will return a set of blank fields)
		if ($submit || !$question_id)
		{
			$this->acp_page_display_editor($question_input);
		}
		else
		{
			// Use the database question data
			$this->acp_page_display_editor($question);
		}
	}

	/**
	 * When no trigger_error's have kicked in on the acp_page, display the question data
	 *
	 * @param array $question Can be $question (from database) or $question_input (from user)
	 */
	protected function acp_page_display_editor($question)
	{
		$this->template->assign_vars(array(
			'QUESTION_TEXT'		=> $question['question_text'],
			'LANG_ISO'			=> $question['lang_iso'],
			'SORT'				=> $question['sort'],
			'NAME_LEFT'			=> $question['name_left'],
			'NAME_RIGHT'		=> $question['name_right'],
			'OPTIONS_LEFT'		=> implode("\n", $question['options_left']),
			'OPTIONS_RIGHT'		=> implode("\n", $question['options_right']),
		));

		// Create language selectbox
		$langs = $this->get_languages();
		foreach ($langs as $lang => $entry)
		{
			$this->template->assign_block_vars('langs', array(
				'ISO' => $lang,
				'NAME' => $entry['name'],
			));
		}
	}

	/**
	 * Shows a confirm_box and deletes the question when confirmed.
	 * This function displays an error when an admin tries to delete the last question while this captcha plugin is set as default.
	 *
	 * @param int $question_id
	 */
	protected function acp_question_delete_confirm($question_id)
	{
		// Make sure the user is not deleting the latest question when this captcha is set as default
		if ($this->get_service_name() !== $this->config['captcha_plugin'] || !$this->acp_is_last($question_id))
		{
			// When the deletion is confirmed
			if (confirm_box(true))
			{
				$this->acp_delete_question($question_id);
				trigger_error($this->user->lang['QUESTION_DELETED'] . adm_back_link($this->acp_list_url));
			}
			else
			{
				// Show deletion confirm box
				confirm_box(false, $this->user->lang['CONFIRM_OPERATION'], build_hidden_fields(array(
					'question_id'		=> $question_id,
					'action'			=> 'delete',
					'configure'			=> 1,
					'select_captcha'	=> $this->get_service_name(),
					))
				);
			}
		}
		else
		{
			// Prevent the deletion of the latest question since this captcha is set as default
			trigger_error($this->user->lang['QA_LAST_QUESTION'] . adm_back_link($this->acp_list_url), E_USER_WARNING);
		}
	}

	/**
	*  This handles the list overview
	*/
	public function acp_question_list(&$module)
	{
		$sql = 'SELECT *
				FROM ' . $this->table_sortables_questions;
		$result = $this->db->sql_query($sql);
		$this->template->assign_vars(array(
			'S_LIST'			=> true,
		));

		while ($row = $this->db->sql_fetchrow($result))
		{
			$url = $module->u_action . "&amp;question_id={$row['question_id']}&amp;configure=1&amp;select_captcha=" . $this->get_service_name() . '&amp;';

			$this->template->assign_block_vars('questions', array(
				'QUESTION_TEXT'		=> $row['question_text'],
				'QUESTION_ID'		=> $row['question_id'],
				'QUESTION_LANG'		=> $row['lang_iso'],
				'U_DELETE'			=> "{$url}action=delete",
				'U_EDIT'			=> "{$url}action=edit",
			));
		}
		$this->db->sql_freeresult($result);
	}

	/**
	*  Grab a question and bring it into a format the editor understands
	*/
	public function acp_get_question_data($question_id)
	{
		if ($question_id)
		{
			$sql = 'SELECT *
				FROM ' . $this->table_sortables_questions . '
				WHERE question_id = ' . (int) $question_id;
			$result = $this->db->sql_query($sql);
			$question = $this->db->sql_fetchrow($result);
			$this->db->sql_freeresult($result);

			if (!$question)
			{
				return false;
			}

			$question['answers'] = array();
			$question['options_left'] = array();
			$question['options_right'] = array();

			$sql = 'SELECT *
				FROM ' . $this->table_sortables_answers . '
				WHERE question_id = ' . (int) $question_id;
			$result = $this->db->sql_query($sql);

			while ($row = $this->db->sql_fetchrow($result))
			{
				if (!$row['answer_sort']) // 0 = left column, 1 = right column
				{
					$question['options_left'][] = $row['answer_text'];
				}
				else
				{
					$question['options_right'][] = $row['answer_text'];
				}
			}
			$this->db->sql_freeresult($result);
			return $question;
		}
	}

	/**
	*  Grab a question from input and bring it into a format the editor understands
	*/
	public function acp_get_question_input()
	{
		$question = array(
			'question_text'	=> $this->request->variable('question_text', '', true),
			'sort'			=> $this->request->variable('sort', false),
			'lang_iso'		=> $this->request->variable('lang_iso', ''),
			'name_left'		=> $this->request->variable('name_left', '', true),
			'name_right'	=> $this->request->variable('name_right', '', true),
			'options_left'	=> $this->acp_input_options_to_array($this->request->variable('options_left', '', true)),
			'options_right'	=> $this->acp_input_options_to_array($this->request->variable('options_right', '', true)),
		);

		return $question;
	}

	/**
	* Split a string on new lines, trim spaces, remove blank options and return an option array.
	*
	* @param string $options
	* @return array $options_array
	*/
	public function acp_input_options_to_array($options)
	{
		// Split options (per line) to an array
		$options_array = explode("\n", $options);

		// Trim spaces from each option
		$options_array = array_map('trim', $options_array);

		// Remove empty options, but allow "0" as option
		$options_array = array_filter($options_array, 'strlen');

		// Re-index array keys
		$options_array = array_values($options_array);

		// Return the options as array
		return $options_array;
	}

	/**
	 * Update a question
	 *
	 * @param mixed $data An array as created from acp_get_question_input or acp_get_question_data
	 * @param integer $question_id
	 */
	public function acp_update_question($data, $question_id)
	{
		// easier to delete all answers than to figure out which to update
		$sql = 'DELETE FROM ' . $this->table_sortables_answers . " WHERE question_id = " . (int) $question_id;
		$this->db->sql_query($sql);

		$langs = $this->get_languages();
		$question_ary = $data;
		$question_ary['lang_id'] = $langs[$question_ary['lang_iso']]['id'];
		unset($question_ary['options_left']);
		unset($question_ary['options_right']);

		$sql = "UPDATE " . $this->table_sortables_questions . '
			SET ' . $this->db->sql_build_array('UPDATE', $question_ary) . "
			WHERE question_id = $question_id";
		$this->db->sql_query($sql);

		$this->acp_insert_answers($data, $question_id);

		$this->cache->destroy('sql', $this->table_sortables_questions);
	}

	/**
	 * Insert a question
	 * @param mixed $data An array as created from acp_get_question_input or acp_get_question_data
	 */
	public function acp_insert_question($data)
	{
		$langs = $this->get_languages();
		$question_ary = $data;

		$question_ary['lang_id'] = $langs[$data['lang_iso']]['id'];
		unset($question_ary['options_left']);
		unset($question_ary['options_right']);

		$sql = 'INSERT INTO ' . $this->table_sortables_questions . $this->db->sql_build_array('INSERT', $question_ary);
		$this->db->sql_query($sql);

		$question_id = $this->db->sql_nextid();

		$this->acp_insert_answers($data, $question_id);

		$this->cache->destroy('sql', $this->table_sortables_questions);
	}

	/**
	*  Insert the answers.
	* param mixed $data : an array as created from acp_get_question_input or acp_get_question_data
	*/
	public function acp_insert_answers($data, $question_id)
	{
		// The boxes with options
		$option_boxes = array(
			0 => 'options_left',
			1 => 'options_right'
		);

		// Loop through the two boxes with options
		foreach ($option_boxes as $box_id => $box_name)
		{
			// Loop through each of the options within this box
			foreach ($data[$box_name] as $answer)
			{
				$answer_ary = array(
					'answer_id'		=> $this->acp_gen_random_answer_id(),
					'question_id'	=> $question_id,
					'answer_sort'	=> $box_id,
					'answer_text'	=> $answer,
				);
				$sql = 'INSERT INTO ' . $this->table_sortables_answers . $this->db->sql_build_array('INSERT', $answer_ary);
				$this->db->sql_query($sql);
			}
		}

		$this->cache->destroy('sql', $this->table_sortables_answers);
	}

	/**
	 * Delete a question
	 * @param integer $question_id
	 */
	public function acp_delete_question($question_id)
	{
		$tables = array($this->table_sortables_questions, $this->table_sortables_answers);
		foreach ($tables as $table)
		{
			$sql = "DELETE FROM $table
				WHERE question_id = " . (int) $question_id;
			$this->db->sql_query($sql);
		}

		$this->cache->destroy('sql', $tables);
	}

	/**
	*  Check if the entered data can be inserted/used
	* param mixed $data : an array as created from acp_get_question_input or acp_get_question_data
	*/
	public function validate_input($question_data)
	{
		$langs = $this->get_languages();

		if (empty($question_data['lang_iso']) || !isset($langs[$question_data['lang_iso']]) ||
			empty($question_data['question_text']) ||
			!isset($question_data['sort']) ||
			!isset($question_data['name_left']) || !strlen($question_data['name_left']) ||		// "0" as input is allowed
			!isset($question_data['name_right']) ||	!strlen($question_data['name_right']) ||	// "0" as input is allowed
			empty($question_data['options_left']) || !is_array($question_data['options_left']) ||
			empty($question_data['options_right']) || !is_array($question_data['options_right']))
		{
			return false;
		}

		return true;
	}

	/**
	 * See if there is a question other than the one we have
	 *
	 * @param integer $question_id
	 * @return boolean
	 */
	public function acp_is_last($question_id)
	{
		$sql = 'SELECT question_id
			FROM ' . $this->table_sortables_questions . "
			WHERE lang_iso = '" . $this->db->sql_escape($this->config['default_lang']) . "'
				AND  question_id <> " .  (int) $question_id;
		$result = $this->db->sql_query_limit($sql, 1);
		$question = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		if (!$question)
		{
			return true;
		}
		return false;
	}

	/**
	*	Get all answer_ids (used to check if a random answer_id is not already used)
	*/
	protected function acp_get_answer_ids()
	{
		// If it's ready set, then stop here
		if ($this->answer_ids)
		{
			return $this->answer_ids;
		}

		// Get all answer ids
		$sql = 'SELECT answer_id
				FROM ' . $this->table_sortables_answers;
		$result = $this->db->sql_query($sql);

		// Fill it up
		while ($row = $this->db->sql_fetchrow($result))
		{
			$this->answer_ids[] = $row['answer_id'];
		}
		$this->db->sql_freeresult($result);

		// When the answers table is empty, add 0 to prevent problems
		if (empty($this->answer_ids))
		{
			$this->answer_ids[] = 0;
		}

		return $this->answer_ids;
	}

	/**
	*	Generate an unique answer_id
	*/
	protected function acp_gen_random_answer_id()
	{
		// Get the already used ids
		$answer_ids = $this->acp_get_answer_ids();

		// Randomise
		$random = mt_rand(1, 100000);

		// If already used, repeat this function recursively
		if (in_array($random, $answer_ids))
		{
			return $this->acp_gen_random_answer_id();
		}

		return $random;
	}

	/**
	*	Get the random statement for this database layer
	*/
	protected function sql_random()
	{
		switch ($this->db->get_sql_layer())
		{
			case 'firebird':
			case 'oracle':
			case 'postgres':
			case 'sqlite':
				return 'RANDOM()';

			/* All other cases should use the default
			case 'mssql':
			case 'mssqlnative':
			case 'mysql_40':
			case 'mysql_41':
			case 'mysqli':*/
			default:
				return 'RAND()';
		}
	}
}
