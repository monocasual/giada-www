<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\controller;

use phpbb\config\config;
use phpbb\request\request;
use phpbb\user;
use phpbb\template\template;
use phpbb\language\language;
use phpbb\db\driver\driver_interface;
use david63\privacypolicy\core\privacypolicy;
use phpbb\pagination;
use phpbb\log\log;
use david63\privacypolicy\core\functions;

/**
* Admin data controller
*/
class acp_data_controller implements acp_data_interface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\language\language */
	protected $language;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var string phpBB root path */
	protected $root_path;

	/** @var string PHP extension */
	protected $php_ext;

	/** @var \david63\privacypolicy\core\privacypolicy */
	protected $privacypolicy;

	/** @var \phpbb\pagination */
	protected $pagination;

	/** @var \phpbb\log\log */
	protected $log;

	/** @var \david63\privacypolicy\core\functions */
	protected $functions;

	/** @var string phpBB tables */
	protected $tables;

	/** @var string Custom form action */
	protected $u_action;

	/**
	* Constructor for data controller
	*
	* @param \phpbb\config\config						$config				Config object
	* @param \phpbb\request\request						$request			Request object
	* @param \phpbb\user								$user				User object
	* @param \phpbb\template\template					$template			Template object
	* @param \phpbb\language\language					$language			Language object
	* @param \phpbb_db_driver							$db					The db connection
	* @param string										$phpbb_root_path    phpBB root path
	* @param string										$php_ext            phpBB extension
	* @param \david63\privacypolicy\core\privacypolicy	privacypolicy		Methods for the extension
	* @param \phpbb\pagination							$pagination			Pagination object
	* @param \phpbb\log\log								$log				Log object
	* @param \david63\privacypolicy\core\functions		$functions			Functions for the extension
	* @param array										$tables			phpBB db tables
	*
	* @return \david63\privacypolicy\controller\acp_data_controller
	* @access public
	*/
	public function __construct(config $config, request $request, user $user, template $template, language $language, driver_interface $db, $root_path, $php_ext, privacypolicy $privacypolicy, pagination $pagination, log $log, functions $functions, $tables)
	{
		$this->config			= $config;
		$this->request			= $request;
		$this->user				= $user;
		$this->template			= $template;
		$this->language			= $language;
		$this->db				= $db;
		$this->root_path		= $root_path;
		$this->php_ext			= $php_ext;
		$this->privacypolicy	= $privacypolicy;
		$this->pagination		= $pagination;
		$this->log				= $log;
		$this->functions		= $functions;
		$this->tables			= $tables;
	}

	/**
	* Display the privacy data list for all users
	*
	* @return null
	* @access public
	*/
	public function display_list()
	{
		// Add the language file
		$this->language->add_lang('acp_list_privacypolicy', $this->functions->get_ext_namespace());

		// Check if Tapatalk is installed
		$this->privacypolicy->tapatalk();

		// Start initial var setup
		$action			= $this->request->variable('action', '');
		$clear_filters	= $this->request->variable('clear_filters', '');
		$fc				= $this->request->variable('fc', '');
		$sort_key		= $this->request->variable('sk', 'u');
		$sd = $sort_dir	= $this->request->variable('sd', 'a');
		$start			= $this->request->variable('start', 0);

		$back = false;

		if ($clear_filters)
		{
			$fc				= '';
			$sd = $sort_dir	= 'a';
			$sort_key		= 'u';
		}

		$sort_dir = ($sort_dir == 'd') ? ' DESC' : ' ASC';

		$order_ary = array(
			'a'	=> 'u.user_accept_date' . $sort_dir,
			'i'	=> 'u.user_id' . $sort_dir,
			'r'	=> 'u.user_regdate' . $sort_dir,
			'u'	=> 'u.username_clean' . $sort_dir. ', u.username_clean ASC',
			'l'	=> 'u.user_lastvisit' . $sort_dir,
		);

		$filter_by = '';
		if ($fc == 'other')
		{
			for ($i = ord($this->language->lang('START_CHARACTER')); $i	<= ord($this->language->lang('END_CHARACTER')); $i++)
			{
				$filter_by .= ' AND u.username_clean ' . $this->db->sql_not_like_expression(utf8_clean_string(chr($i)) . $this->db->get_any_char());
			}
		}
		else if ($fc)
		{
			$filter_by .= ' AND u.username_clean ' . $this->db->sql_like_expression(utf8_clean_string(substr($fc, 0, 1)) . $this->db->get_any_char());
		}

		$sql = $this->db->sql_build_query('SELECT', array(
			'SELECT'	=> 'u.user_id, u.username, u.username_clean, u.user_colour, u.user_regdate, u.user_accept_date, u.user_posts, u.user_lastvisit',
			'FROM'		=> array(
				$this->tables['users']	=> 'u',
			),
			'WHERE'		=> 'u.user_type <> ' . USER_IGNORE . $filter_by,
			'ORDER_BY'	=> ($sort_key == '') ? 'u.username_clean ASC' : $order_ary[$sort_key] . ', u.username_clean ASC',
		));

		$result = $this->db->sql_query_limit($sql, $this->config['privacy_policy_list_lines'], $start);

		while ($row = $this->db->sql_fetchrow($result))
		{
			$this->template->assign_block_vars('privacy_list', array(
				'ACCEPT_DATE'	=> ($row['user_accept_date'] != 0) ? $this->user->format_date($row['user_accept_date']) : $this->language->lang('NOT_ACCEPTED'),
				'LAST_VISIT'	=> $this->get_last_visit($row['user_id']),
				'REG_DATE'		=> $this->user->format_date($row['user_regdate']),
				'USERNAME'		=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']),
				'USER_ID'		=> $this->language->lang('HASH') . $row['user_id'],
				'POSTS'			=> $row['user_posts'],
			));
		}
		$this->db->sql_freeresult($result);

		$sort_by_text	= array('i' => $this->language->lang('USER_ID'), 'u' => $this->language->lang('USERNAME'), 'a' => $this->language->lang('ACCEPT_DATE'), 'r' => $this->language->lang('REG_DATE'), 'l' => $this->language->lang('LAST_VISIT'));
		$limit_days	= array();
		$s_sort_key	= $s_limit_days = $s_sort_dir = $u_sort_param = '';

		gen_sort_selects($limit_days, $sort_by_text, $sort_days, $sort_key, $sd, $s_limit_days, $s_sort_key, $s_sort_dir, $u_sort_param);

		// Get total user count for pagination
		$sql = $this->db->sql_build_query('SELECT', array(
			'SELECT'	=> 'COUNT(u.user_id) AS total_users',
			'FROM'		=> array(
				$this->tables['users']	=> 'u',
			),
			'WHERE'		=> 'u.user_type <> ' . USER_IGNORE . $filter_by,
		));

		$result		= $this->db->sql_query($sql);
		$user_count	= (int) $this->db->sql_fetchfield('total_users');

		$this->db->sql_freeresult($result);

		$action = "{$this->u_action}&amp;sk=$sort_key&amp;sd=$sd&amp;fc=$fc";
		$start 	= $this->pagination->validate_start($start, $this->config['privacy_policy_list_lines'], $user_count);
		$this->pagination->generate_template_pagination($action . "&ampfc=$fc", 'pagination', 'start', $user_count, $this->config['privacy_policy_list_lines'], $start);

		$first_characters		= array();
		$first_characters['']	= $this->language->lang('ALL');
		for ($i = ord($this->language->lang('START_CHARACTER')); $i	<= ord($this->language->lang('END_CHARACTER')); $i++)
		{
			$first_characters[chr($i)] = chr($i);
		}
		$first_characters['other'] = $this->language->lang('OTHER');

		foreach ($first_characters as $char => $desc)
		{
			$this->template->assign_block_vars('first_char', array(
				'DESC'		=> $desc,
				'U_SORT'	=> $action . '&amp;fc=' . $char,
			));
		}

		// Template vars for header panel
		$this->template->assign_vars(array(
			'ERROR_TITLE'		=> $this->language->lang('TAPATALK_INSTALLED'),
			'ERROR_DESCRIPTION'	=> $this->language->lang('TAPATALK_INSTALLED_EXPLAIN'),

			'HEAD_TITLE'		=> $this->language->lang('PRIVACY_LIST'),
			'HEAD_DESCRIPTION'	=> $this->language->lang('PRIVACY_LIST_EXPLAIN'),

			'NAMESPACE'			=> $this->functions->get_ext_namespace('twig'),

			'S_BACK'			=> $back,
			'S_VERSION_CHECK'	=> $this->functions->version_check(),

			'VERSION_NUMBER'	=> $this->functions->get_meta('version'),
		));

		$this->template->assign_vars(array(
			'S_FILTER_CHAR'		=> $this->character_select($fc),
			'S_SORT_DIR'		=> $s_sort_dir,
			'S_SORT_KEY'		=> $s_sort_key,

			'TOTAL_USERS'		=> $user_count,

			'U_ACTION'			=> $action . "&ampfc=$fc",
		));
	}

	/**
	 * Create the character select
	 *
	 * @param $default
	 *
	 * @return string $char_select
	 * @access protected
	 */
	protected function character_select($default)
	{
		$options	 = array();
		$options[''] = $this->language->lang('ALL');

		for ($i = ord($this->language->lang('START_CHARACTER')); $i	<= ord($this->language->lang('END_CHARACTER')); $i++)
		{
			$options[chr($i)] = chr($i);
		}

		$options['other'] 	= $this->language->lang('OTHER');
		$char_select 		= '<select name="fc" id="fc">';

		foreach ($options as $value => $char)
		{
			$char_select .= '<option value="' . $value . '"';

			if (isset($default) && $default == $char)
			{
				$char_select .= ' selected';
			}

			$char_select .= '>' . $char . '</option>';
		}

		$char_select .= '</select>';

		return $char_select;
	}

	/**
	* Display the privacy data for a user
	*
	* @return null
	* @access public
	*/
	public function display_data()
	{
		// Add the language files
		$this->language->add_lang('acp_data_privacypolicy', $this->functions->get_ext_namespace());
		$this->language->add_lang('common_privacypolicy', $this->functions->get_ext_namespace());

		$error = false;
		$error_title = $error_description = '';

		// Check if Tapatalk is installed
		if ($this->privacypolicy->tapatalk(false))
		{
			$error 				= true;
			$error_title 		= $this->language->lang('TAPATALK_INSTALLED');
			$error_description	= $this->language->lang('TAPATALK_INSTALLED_EXPLAIN');
		}

		// Create a form key for preventing CSRF attacks
		$form_key = 'privacy_policy_data';
		add_form_key($form_key);

		$privacy_username	= $this->request->variable('privacy_username', '', true);
		$user_id 			= $this->request->variable('user_id', 0);
		$username 			= $this->request->variable('username', '');
		$confirm 			= true;
		$back				= false;

		// Submit
		if ($this->request->is_set_post('details') || $this->request->is_set_post('accept') || $this->request->is_set_post('unaccept'))
		{
			// Is the submitted form is valid?
			if (!check_form_key($form_key))
			{
				trigger_error($this->language->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			if ($this->request->is_set_post('details'))
			{
				// Has a username been entered?
				if (!$privacy_username)
				{
					$error 				= true;
					$error_title 		= $this->language->lang('WARNING');
					$error_description	= $this->language->lang('NO_USERNAME');
				}
				else
				{
					// Get the userid from the username
					$sql = 'SELECT user_id
						FROM ' . $this->tables['users'] . "
							WHERE username_clean = '" . $this->db->sql_escape(utf8_clean_string($privacy_username)) . "'";

					$result 	= $this->db->sql_query($sql);
					$user_id	= (int) $this->db->sql_fetchfield('user_id');

					$this->db->sql_freeresult($result);

					// Is the username valid?
					if (!$user_id)
					{
						$error 				= true;
						$error_title 		= $this->language->lang('WARNING');
						$error_description	= $this->language->lang('INVALID_USERNAME');
					}
					else
					{
						$confirm 	= false;
						$back		= true;

						$s_hidden_fields = array(
							'user_id'	=> $user_id,
							'username'	=> $privacy_username,
						);

						$this->template->assign_var('S_HIDDEN_FIELDS', build_hidden_fields($s_hidden_fields));

						$this->privacypolicy->display_privacy_data($user_id);
					}
				}
			}

			if ($this->request->is_set_post('accept'))
			{
				// Set the accept date in the Users table for this user
				$sql = 'UPDATE ' . $this->tables['users'] . '
					SET user_accept_date = ' . time() . '
					WHERE user_id = ' . (int) $user_id;

				$this->db->sql_query($sql);

				// Update Auto Groups
				$this->privacypolicy->update_auto_groups($user_id);

				// Add action to the admin log
				$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'POLICY_USER_ACCEPT_LOG', time(), array($username));

				// Confirm this to the user and provide link back to previous page
				trigger_error($this->language->lang('POLICY_ACCEPTANCE_SET', $username) . adm_back_link($this->u_action));
			}

			if ($this->request->is_set_post('unaccept'))
			{
				// Reset the accept date in the Users table for this user
				$sql = 'UPDATE ' . $this->tables['users'] . '
					SET user_accept_date = 0
					WHERE user_id = ' . (int) $user_id;

				$this->db->sql_query($sql);

				// Update Auto Groups
				$this->privacypolicy->update_auto_groups($user_id);

				// Add action to the admin log
				$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'POLICY_USER_UNSET_LOG', time(), array($username));

				// Confirm this to the user and provide link back to previous page
				trigger_error($this->language->lang('POLICY_ACCEPTANCE_UNSET', $username) . adm_back_link($this->u_action));
			}
		}

		// Template vars for header panel
		$this->template->assign_vars(array(
			'ERROR_TITLE'		=> $error_title,
			'ERROR_DESCRIPTION'	=> $error_description,

			'HEAD_TITLE'		=> $this->language->lang('ACP_PRIVACY_TITLE'),
			'HEAD_DESCRIPTION'	=> $this->language->lang('ACP_PRIVACY_POLICY_EXPLAIN'),

			'NAMESPACE'			=> $this->functions->get_ext_namespace('twig'),

			'S_BACK'			=> $back,
			'S_ERROR'			=> $error,'S_BACK'			=> $back,
			'S_VERSION_CHECK'	=> $this->functions->version_check(),

			'VERSION_NUMBER'	=> $this->functions->get_meta('version'),
		));

		$this->template->assign_vars(array(
			'S_CONFIRM'			=> $confirm,

			'U_ACTION'			=> $this->u_action,
			'U_FIND_USERNAME'	=> append_sid("{$this->root_path}memberlist.$this->php_ext", 'mode=searchuser&amp;form=privacy_policy_data&amp;field=privacy_username&amp;select_single=true'),
		));
	}

	/**
	 * Get the user's last visit
	 * This is more accurate than user_lastvisit in the user table
	 *
	 * @param $user_id
	 * @return int|mixed|string $last_visit
	 * @access protected
	 */
	protected function get_last_visit($user_id)
	{
		$last_visit 	= '';
		$session_times	= array();

		$sql = 'SELECT session_user_id, MAX(session_time) AS session_time
			FROM ' . $this->tables['sessions'] . '
			WHERE session_time >= ' . (time() - $this->config['session_length']) . '
				AND ' . $this->db->sql_in_set('session_user_id', $user_id) . '
			GROUP BY session_user_id';

		$result = $this->db->sql_query($sql);

		while ($row = $this->db->sql_fetchrow($result))
		{
			$session_times[$row['session_user_id']] = $row['session_time'];
		}

		$this->db->sql_freeresult($result);

		$sql = 'SELECT user_lastvisit
			FROM ' . $this->tables['users'] . '
			WHERE ' . $this->db->sql_in_set('user_id', $user_id);

		$result = $this->db->sql_query($sql);

		while ($row = $this->db->sql_fetchrow($result))
		{
			$session_time	= (!empty($session_times[$user_id])) ? $session_times[$user_id] : 0;
			if ($row['user_lastvisit'] == 0)
			{
				$last_visit = $this->language->lang('NO_VISIT');
			}
			else
			{
				$last_visit = (!empty($session_time)) ? $session_time : $row['user_lastvisit'];
				$last_visit = $this->user->format_date($last_visit);
			}
		}

		$this->db->sql_freeresult($result);

		return $last_visit;
	}

	/**
	* Set page url
	*
	* @param string $u_action Custom form action
	* @return null
	* @access public
	*/
	public function set_page_url($u_action)
	{
		return $this->u_action = $u_action;
	}
}
