<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\controller;

use Symfony\Component\DependencyInjection\ContainerInterface;

use \phpbb\config\config;
use \phpbb\request\request;
use \phpbb\user;
use \phpbb\template\template;
use \phpbb\language\language;
use \phpbb\db\driver\driver_interface;
use \david63\privacypolicy\core\privacypolicy;
use \phpbb\pagination;
use \david63\privacypolicy\ext;

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
	protected $phpEx;

	/** @var \david63\privacypolicy\core\privacypolicy */
	protected $privacypolicy;

	/** @var \phpbb\pagination */
	protected $pagination;

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
	*
	* @return \david63\privacypolicy\controller\data_controller
	* @access public
	*/
	public function __construct(config $config, request $request, user $user, template $template, language $language, driver_interface $db, $root_path, $php_ext, privacypolicy $privacypolicy, pagination $pagination)
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
		$this->language->add_lang('acp_list_privacypolicy', 'david63/privacypolicy');

		// Start initial var setup
		$action			= $this->request->variable('action', '');
		$clear_filters	= $this->request->variable('clear_filters', '');
		$fc				= $this->request->variable('fc', '');
		$sort_key		= $this->request->variable('sk', 'u');
		$sd = $sort_dir	= $this->request->variable('sd', 'a');
		$start			= $this->request->variable('start', 0);

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
				USERS_TABLE	=> 'u',
			),
			'WHERE'		=> 'u.user_type <> 2' . $filter_by,
			'ORDER_BY'	=> ($sort_key == '') ? 'u.username_clean ASC' : $order_ary[$sort_key] . ', u.username_clean ASC',
		));

		$result = $this->db->sql_query_limit($sql, $this->config['privacy_policy_list_lines'], $start);

		while ($row = $this->db->sql_fetchrow($result))
		{
			$this->template->assign_block_vars('privacy_list', array(
				'ACCEPT_DATE'	=> ($row['user_accept_date'] != 0) ? $this->user->format_date($row['user_accept_date']) : 'Not accepted',
				'LAST_VISIT'	=> $this->user->format_date($row['user_lastvisit']),
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
				USERS_TABLE	=> 'u',
			),
			'WHERE'		=> 'u.user_type <> 2' . $filter_by,
		));

		$result		= $this->db->sql_query($sql);
		$user_count	= (int) $this->db->sql_fetchfield('total_users');

		$this->db->sql_freeresult($result);

		$action = "{$this->u_action}&amp;sk=$sort_key&amp;sd=$sd";
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

		$this->template->assign_vars(array(
			'PRIVACY_POLICY_VERSION'	=> ext::PRIVACY_POLICY_VERSION,
			'S_FILTER_CHAR'				=> $this->character_select($fc),
			'S_SORT_DIR'				=> $s_sort_dir,
			'S_SORT_KEY'				=> $s_sort_key,
			'TOTAL_USERS'				=> $user_count,
			'U_ACTION'					=> $action . "&ampfc=$fc",
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
		$this->language->add_lang('acp_data_privacypolicy', 'david63/privacypolicy');
		$this->language->add_lang('common_privacypolicy', 'david63/privacypolicy');

		// Create a form key for preventing CSRF attacks
		$form_key = 'privacy_policy_data';
		add_form_key($form_key);

		$privacy_username = $this->request->variable('privacy_username', '');

		$confirm = true;

		// Submit
		if ($this->request->is_set_post('submit'))
		{
			// Is the submitted form is valid?
			if (!check_form_key($form_key))
			{
				trigger_error($this->language->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			// Has a username been entered?
			if (!$privacy_username)
			{
				trigger_error($this->language->lang('NO_USERNAME') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			// Get the userid from the username
			$sql = 'SELECT user_id
				FROM ' . USERS_TABLE . "
					WHERE username_clean = '" . $this->db->sql_escape(utf8_clean_string($privacy_username)) . "'";

			$result = $this->db->sql_query($sql);

			$row = $this->db->sql_fetchrow($result);
			$this->db->sql_freeresult($result);

			// Is the username valid?
			if (!$row)
			{
				trigger_error($this->language->lang('INVALID_USERNAME') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			$user_id = $row['user_id'];
			$confirm = false;

			$this->template->assign_var('S_CONFIRM', $confirm);

			$this->privacypolicy->display_privacy_data($user_id);
		}

		$this->template->assign_vars(array(
			'PRIVACY_POLICY_VERSION'	=> ext::PRIVACY_POLICY_VERSION,
			'S_CONFIRM'					=> $confirm,
			'U_FIND_USERNAME'			=> append_sid("{$this->root_path}memberlist.$this->php_ext", 'mode=searchuser&amp;form=privacy_policy_data&amp;field=privacy_username&amp;select_single=true'),
		));
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
