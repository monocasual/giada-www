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
use \phpbb\template\template;
use \phpbb\user;
use \phpbb\language\language;
use \phpbb\log\log;
use \phpbb\db\driver\driver_interface;
use \david63\privacypolicy\ext;

/**
* Admin controller
*/
class acp_manage_controller implements acp_manage_interface
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

	/** @var string Custom form action */
	protected $u_action;

    /**
	* Constructor for admin controller
	*
	* @param \phpbb\config\config		$config		Config object
	* @param \phpbb\request\request		$request	Request object
	* @param \phpbb\template\template	$template	Template object
	* @param \phpbb\user				$user		User object
	* @param \phpbb\language\language	$language	Language object
	* @param \phpbb\log\log				$log		Log object
	* @param phpbb_db_driver			$db			The db connection
	*
	* @return \david63\privacypolicy\controller\admin_controller
	* @access public
	*/
	public function __construct(config $config, request $request, template $template, user $user, language $language, log $log, driver_interface $db)
	{
		$this->config	= $config;
		$this->request	= $request;
		$this->template	= $template;
		$this->user		= $user;
		$this->language	= $language;
		$this->log		= $log;
		$this->db		= $db;
	}

    /**
	* Display the options a user can configure for this extension
	*
	* @return null
	* @access public
	*/
	public function display_options()
	{
		// Add the language file
		$this->language->add_lang('acp_privacypolicy', 'david63/privacypolicy');

		// Create a form key for preventing CSRF attacks
		$form_key = 'privacypolicy_manage';
		add_form_key($form_key);

		// Is the form being submitted?
		if ($this->request->is_set_post('submit'))
		{
			// Is the submitted form is valid?
			if (!check_form_key($form_key))
			{
				trigger_error($this->language->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			// If no errors, process the form data
			// Set the options the user configured
			$this->set_options();

			// Add option settings change action to the admin log
			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'PRIVACY_POLICY_LOG');

			if ($this->config['privacy_policy_reset'])
			{
				// Reset the accept date in the Users table
				$sql = 'UPDATE ' . USERS_TABLE . '
					SET user_accept_date = 0';

				$this->db->sql_query($sql);

				// Add action to the admin log
				$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'POLICY_RESET_LOG');

				// Reset the config variable to zero
				$this->config->set('privacy_policy_reset', 0, false);
			}

			// Option settings have been updated and logged
			// Confirm this to the user and provide link back to previous page
			trigger_error($this->language->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
		}

		// Set output vars for display in the template
		$this->template->assign_vars(array(
			'COOKIE_BLOCK_LINKS'			=> isset($this->config['cookie_block_links']) ? $this->config['cookie_block_links'] : '',
			'COOKIE_BOX_BDR_COLOUR'			=> isset($this->config['cookie_box_bdr_colour']) ? $this->config['cookie_box_bdr_colour'] : '',
			'COOKIE_BOX_BDR_WIDTH'			=> isset($this->config['cookie_box_bdr_width']) ? $this->config['cookie_box_bdr_width'] : '',
			'COOKIE_BOX_BG_COLOUR'			=> isset($this->config['cookie_box_bg_colour']) ? $this->config['cookie_box_bg_colour'] : '',
			'COOKIE_BOX_HREF_COLOUR'		=> isset($this->config['cookie_box_href_colour']) ? $this->config['cookie_box_href_colour'] : '',
			'COOKIE_BOX_TXT_COLOUR'			=> isset($this->config['cookie_box_txt_colour']) ? $this->config['cookie_box_txt_colour'] : '',
			'COOKIE_CUSTOM_PAGE'			=> isset($this->config['cookie_custom_page']) ? $this->config['cookie_custom_page'] : '',
			'COOKIE_CUSTOM_PAGE_CORNERS'	=> isset($this->config['cookie_page_corners']) ? $this->config['cookie_page_corners'] : '',
			'COOKIE_CUSTOM_PAGE_RADIUS'		=> isset($this->config['cookie_page_radius']) ? $this->config['cookie_page_radius'] : '',
			'COOKIE_PAGE_BG_COLOUR'			=> isset($this->config['cookie_page_bg_colour']) ? $this->config['cookie_page_bg_colour'] : '',
			'COOKIE_PAGE_TXT_COLOUR'		=> isset($this->config['cookie_page_txt_colour']) ? $this->config['cookie_page_txt_colour'] : '',
			'COOKIE_POLICY_ENABLED'			=> isset($this->config['cookie_policy_enable']) ? $this->config['cookie_policy_enable'] : '',
			'COOKIE_POLICY_EXPIRE'			=> isset($this->config['cookie_expire']) ? $this->config['cookie_expire'] : '',
			'COOKIE_POLICY_ON_INDEX'		=> isset($this->config['cookie_on_index']) ? $this->config['cookie_on_index'] : '',
			'PRIVACY_POLICY_VERSION'		=> ext::PRIVACY_POLICY_VERSION,
			'COOKIE_REQUIRE'				=> isset($this->config['cookie_require_access']) ? $this->config['cookie_require_access'] : '',
			'COOKIE_SHOW_POLICY'			=> isset($this->config['cookie_show_policy']) ? $this->config['cookie_show_policy'] : '',
			'PRIVACY_POLICY_ENABLED'		=> isset($this->config['privacy_policy_enable']) ? $this->config['privacy_policy_enable'] : '',
			'PRIVACY_POLICY_FORCE'			=> isset($this->config['privacy_policy_force']) ? $this->config['privacy_policy_force'] : '',
			'PRIVACY_POLICY_LIST_LINES'		=> isset($this->config['privacy_policy_list_lines']) ? $this->config['privacy_policy_list_lines'] : '',
			'PRIVACY_POLICY_REMOVE'			=> isset($this->config['privacy_policy_remove']) ? $this->config['privacy_policy_remove'] : '',
			'PRIVACY_POLICY_RESET'			=> isset($this->config['privacy_policy_reset']) ? $this->config['privacy_policy_reset'] : '',

			'U_ACTION' 						=> $this->u_action,
		));
	}

    /**
	* Set the options a user can configure
	*
	* @return null
	* @access protected
	*/
	protected function set_options()
	{
		$this->config->set('cookie_block_links', $this->request->variable('cookie_block_links', 0));
		$this->config->set('cookie_box_bdr_colour', $this->request->variable('cookie_box_bdr_colour', ''));
		$this->config->set('cookie_box_bdr_width', $this->request->variable('cookie_box_bdr_width', 0));
		$this->config->set('cookie_box_bg_colour', $this->request->variable('cookie_box_bg_colour', ''));
		$this->config->set('cookie_box_href_colour', $this->request->variable('cookie_box_href_colour', ''));
		$this->config->set('cookie_box_txt_colour', $this->request->variable('cookie_box_txt_colour', ''));
		$this->config->set('cookie_custom_page', $this->request->variable('cookie_custom_page', 0));
		$this->config->set('cookie_page_corners', $this->request->variable('cookie_page_corners', 0));
		$this->config->set('cookie_page_radius', $this->request->variable('cookie_page_radius', 0));
		$this->config->set('cookie_expire', $this->request->variable('cookie_expire', 0));
		$this->config->set('cookie_on_index', $this->request->variable('cookie_on_index', 0));
		$this->config->set('cookie_page_bg_colour', $this->request->variable('cookie_page_bg_colour', ''));
		$this->config->set('cookie_page_txt_colour', $this->request->variable('cookie_page_txt_colour', ''));
		$this->config->set('cookie_policy_enable', $this->request->variable('cookie_policy_enable', 0));
		$this->config->set('cookie_require_access', $this->request->variable('cookie_require_access', 0));
		$this->config->set('cookie_show_policy', $this->request->variable('cookie_show_policy', 0));
		$this->config->set('privacy_policy_enable', $this->request->variable('privacy_policy_enable', 0));
		$this->config->set('privacy_policy_force', $this->request->variable('privacy_policy_force', 0));
		$this->config->set('privacy_policy_list_lines', $this->request->variable('privacy_policy_list_lines', 25));
		$this->config->set('privacy_policy_remove', $this->request->variable('privacy_policy_remove', 0));
		$this->config->set('privacy_policy_reset', $this->request->variable('privacy_policy_reset', 0, false));
	}
}
