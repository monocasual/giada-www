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
use phpbb\template\template;
use phpbb\user;
use phpbb\language\language;
use phpbb\log\log;
use phpbb\db\driver\driver_interface;
use david63\privacypolicy\core\privacypolicy_lang;
use david63\privacypolicy\core\privacypolicy;
use david63\privacypolicy\core\functions;

/**
 * ACP edit controller
 */
class acp_edit_controller implements acp_edit_interface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\language\language */
	protected $language;

	/** @var \phpbb\log\log */
	protected $log;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var string phpBB root path */
	protected $root_path;

	/** @var string PHP extension */
	protected $phpEx;

	/** @var \david63\privacypolicy\core\privacypolicy_lang */
	protected $privacypolicy_lang;

	/** @var \david63\privacypolicy\core\privacypolicy */
	protected $privacypolicy;

	/** @var \david63\privacypolicy\core\functions */
	protected $functions;

	/** @var string phpBB tables */
	protected $tables;

	/** @var string Custom form action */
	protected $u_action;

	/**
	 * Constructor for admin controller
	 *
	 * @param \phpbb\config\config                           	$config             Config object
	 * @param \phpbb\request\request                         	$request            Request object
	 * @param \phpbb\template\template                       	$template           Template object
	 * @param \phpbb\user                                    	$user               User object
	 * @param \phpbb\language\language                       	$language           Language object
	 * @param \phpbb\log\log                                 	$log                Log object
	 * @param \phpbb_db_driver                                	$db                 The db connection
	 * @param string										 	$phpbb_root_path	phpBB root path
	 * @param string										 	$php_ext            phpBB extension
	 * @param \david63\privacypolicy\core\privacypolicy_lang 	privacypolicy_lang  Methods for the extension
	 * @param \david63\privacypolicy\core\privacypolicy			privacypolicy		Methods for the extension
	 * @param \david63\privacypolicy\core\functions				$functions			Functions for the extension
	 *
	 * @return \david63\privacypolicy\controller\acp_edit_controller
	 * @access public
	 */
	public function __construct(config $config, request $request, template $template, user $user, language $language, log $log, driver_interface $db, $root_path, $php_ext, privacypolicy_lang $privacypolicy_lang, privacypolicy $privacypolicy, functions $functions, $tables)
	{
		$this->config             	= $config;
		$this->request            	= $request;
		$this->template          	= $template;
		$this->user               	= $user;
		$this->language           	= $language;
		$this->log                	= $log;
		$this->db                 	= $db;
		$this->root_path			= $root_path;
		$this->php_ext				= $php_ext;
		$this->privacypolicy_lang 	= $privacypolicy_lang;
		$this->privacypolicy		= $privacypolicy;
		$this->functions			= $functions;
		$this->tables				= $tables;
	}

	/**
	 * Display the editor that a user can use to configure this extension
	 *
	 * @return null
	 * @access public
	 */
	public function edit()
	{
		if (!function_exists('display_custom_bbcodes'))
		{
			include $this->root_path . 'includes/functions_display.' . $this->php_ext;
		}

		// Add the language files
		$this->language->add_lang('acp_privacy_edit', $this->functions->get_ext_namespace());
		$this->language->add_lang('posting');

		// Check if Tapatalk is installed
		$this->privacypolicy->tapatalk();

		// Create a form key for preventing CSRF attacks
		$form_key = 'privacypolicy_edit';
		add_form_key($form_key);

		$lang_name 			= $lang_id = $lang_desc = '';
		$preview   			= false;
		$get_text 			= true;
		$back				= false;
		$s_hidden_fields 	= array();

		// Start initial var setup
		$add_new			= $this->request->variable('add_new', false);
		$lang_id   			= $this->request->variable('privacy_lang_id', '');
		$lang_name 			= $this->request->variable('privacy_lang_name', '');
		$privacy_desc      	= $this->request->variable('privacy_lang_description', '', true);
		$privacy_id			= $this->request->variable('privacy_id', '');
		$privacy_edit_text 	= $this->request->variable('policy_text', '', true);

		// Get the text data
		$text_data = $this->privacypolicy_lang->get_text($lang_name, $lang_id);

		$editable_text = $privacy_bitfield = $privacy_flags = $privacy_id = $privacy_lang_name = $privacy_uid = $local_lang_name = '';

		if ($text_data)
		{
			$editable_text     	= $text_data['privacy_lang_text'];
			$privacy_bitfield  	= $text_data['privacy_text_bbcode_bitfield'];
			$privacy_flags     	= $text_data['privacy_text_bbcode_options'];
			$privacy_id			= $text_data['privacy_id'];
			$privacy_lang_name 	= $text_data['privacy_lang_name'];
			$privacy_uid       	= $text_data['privacy_text_bbcode_uid'];
		}

		// Load the selects
		$this->privacypolicy_lang->get_languages();
		$this->privacypolicy_lang->get_text_names();

		$local_lang_name = $this->privacypolicy_lang->get_lang_name($lang_id);

		// Is the form being submitted?
		if ($this->request->is_set_post('submit_text') || $this->request->is_set_post('submit') || $this->request->is_set_post('preview'))
		{
			// Is the submitted form is valid?
			if (!check_form_key($form_key))
			{
				trigger_error($this->language->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			switch ($lang_name)
			{
				case 'cookie_policy';
					$policy_explain 	= $this->language->lang('COOKIE_EDIT_EXPLAIN');
					$policy_explain_new = $this->language->lang('COOKIE_EDIT_EXPLAIN_NEW', $local_lang_name);
				break;

				case 'privacy_policy';
					$policy_explain 	= $this->language->lang('PRIVACY_EDIT_EXPLAIN');
					$policy_explain_new = $this->language->lang('PRIVACY_EDIT_EXPLAIN_NEW', $local_lang_name);
				break;

				case 'privacy_policy_accept';
					$policy_explain 	= $this->language->lang('PRIVACY_ACCEPT_EDIT_EXPLAIN');
					$policy_explain_new = $this->language->lang('PRIVACY_ACCEPT_EDIT_EXPLAIN_NEW', $local_lang_name);
				break;

				case 'terms_of_use_2';
					$policy_explain 	= $this->language->lang('TERM_OF_USE_EDIT_EXPLAIN');
					$policy_explain_new = $this->language->lang('TERM_OF_USE_EDIT_EXPLAIN_NEW', $local_lang_name);
				break;
			}

			// Get the text to edit
			if ($this->request->is_set_post('submit_text'))
			{
				// Does this text exist? If not then create it
				if (!$this->privacypolicy_lang->get_text($lang_name, $lang_id, false))
				{
					$privacy_desc 	= $this->privacypolicy_lang->get_description($lang_name, 'en');
					$get_text 		= false;
					$back			= true;
					$add_new 		= true;
				}

				$editable_text = generate_text_for_edit($editable_text, $privacy_uid, $privacy_flags);
				$editable_text = $editable_text['text'];
			}

			$storage_text = generate_text_for_storage(
				$privacy_edit_text,
				$privacy_uid,
				$privacy_bitfield,
				$privacy_flags,
				true,
				true
			);

			if ($this->request->is_set_post('submit'))
			{
				if ($add_new)
				{
					$privacy_sql = array(
						'privacy_lang_name'				=> $lang_name,
						'privacy_lang_description'		=> $privacy_desc,
						'privacy_lang_id'				=> $lang_id,
						'privacy_lang_text'				=> $privacy_edit_text,
						'privacy_text_bbcode_uid' 		=> $privacy_uid,
						'privacy_text_bbcode_bitfield'	=> $privacy_bitfield,
						'privacy_text_bbcode_options'	=> $privacy_flags,
					);

					$sql = 'INSERT INTO ' . $this->tables['privacy_lang'] . ' ' . $this->db->sql_build_array('INSERT', $privacy_sql);

					$this->db->sql_query($sql);

					// Add option settings change action to the admin log
					$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'PRIVACY_POLICY_ADD_LOG', time(), array($privacy_desc));

					// Settings have been updated and logged
					// Confirm this to the user and provide link back to previous page
					trigger_error($this->language->lang('PRIVACY_EDIT_CREATED', $privacy_desc) . adm_back_link($this->u_action));
				}
				else
				{
					$privacy_sql = array(
						'privacy_lang_text'				=> $privacy_edit_text,
						'privacy_text_bbcode_uid' 		=> $privacy_uid,
						'privacy_text_bbcode_bitfield'	=> $privacy_bitfield,
						'privacy_text_bbcode_options'	=> $privacy_flags,
					);

					$sql = 'UPDATE ' . $this->tables['privacy_lang'] . '
						SET ' . $this->db->sql_build_array('UPDATE', $privacy_sql) . "
						WHERE privacy_id = $privacy_id";

					$this->db->sql_query($sql);

					$privacy_desc = $this->privacypolicy_lang->get_description($lang_name, $lang_id);

					// Add option settings change action to the admin log
					$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'PRIVACY_POLICY_EDIT_LOG', time(), array($privacy_desc));

					// Settings have been updated and logged
					// Confirm this to the user and provide link back to previous page
					trigger_error($this->language->lang('PRIVACY_EDIT_UPDATED', $privacy_desc) . adm_back_link($this->u_action));
				}
			}

			$s_hidden_fields = array(
				'privacy_id'		=> $privacy_id,
				'privacy_lang_name' => $lang_name,
				'privacy_lang_id' 	=> $lang_id,
				'add_new'			=> $add_new,
			);

			$policy_preview = '';
			if ($this->request->is_set_post('preview'))
			{
				$preview        = true;
				$lang_name      = $lang_name;
				$get_text 		= true;
				$back			= false;
				$policy_preview = generate_text_for_display(str_replace("%sitename%", $this->config['sitename'], $privacy_edit_text), $privacy_uid, $privacy_bitfield, $privacy_flags);
				$editable_text 	= generate_text_for_edit($privacy_edit_text, $privacy_uid, $privacy_flags);
				$editable_text 	= $editable_text['text'];
			}

			$get_text	= false;
			$back		= true;

			$this->template->assign_vars(array(
				'POLICY_DESCRIPTION_EXPLAIN'	=> $this->language->lang('POLICY_DESCRIPTION_EXPLAIN', $local_lang_name),
				'POLICY_EXPLAIN' 				=> $policy_explain,
				'POLICY_EXPLAIN_NEW'			=> $policy_explain_new,
				'POLICY_PREVIEW' 				=> $policy_preview,
				'POLICY_TITLE_PREVIEW'			=> $privacy_desc,

				'S_ADMIN_EDIT'					=> true,
				'S_BBCODE_ALLOWED' 				=> true,
				'S_BBCODE_FLASH' 				=> true,
				'S_BBCODE_IMG' 					=> true,
				'S_HIDDEN_FIELDS' 				=> build_hidden_fields($s_hidden_fields),
				'S_LINKS_ALLOWED' 				=> true,
				'S_PREVIEW' 					=> $preview,
				'S_SMILIES_ALLOWED' 			=> true,
			));

			// Assigning custom bbcodes
			display_custom_bbcodes();
		}

		// Template vars for header panel
		$version_data	= $this->functions->version_check();

		$this->template->assign_vars(array(
			'DOWNLOAD'			=> (array_key_exists('download', $version_data)) ? '<a class="download" href =' . $version_data['download'] . '>' . $this->language->lang('NEW_VERSION_LINK') . '</a>' : '',

			'ERROR_TITLE'		=> $this->language->lang('TAPATALK_INSTALLED'),
			'ERROR_DESCRIPTION'	=> $this->language->lang('TAPATALK_INSTALLED_EXPLAIN'),

			'HEAD_TITLE'		=> $this->language->lang('POLICY_EDIT'),
			'HEAD_DESCRIPTION'	=> $this->language->lang('POLICY_EDIT_EXPLAIN'),

			'NAMESPACE'			=> $this->functions->get_ext_namespace('twig'),

			'S_BACK'			=> $back,
			'S_VERSION_CHECK'	=> (array_key_exists('current', $version_data)) ? $version_data['current'] : false,

			'VERSION_NUMBER'	=> $this->functions->get_meta('version'),
		));

		$this->template->assign_vars(array(
			'POLICY_DESCRIPTION'	=> $privacy_desc,
			'POLICY_TEXT' 			=> $editable_text,

			'S_ADD_NEW'				=> $add_new,
			'S_GET_TEXT' 			=> $get_text,
			'S_SHOW_BUTTONS'		=> true,

			'U_ACTION' 				=> $this->u_action,
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
