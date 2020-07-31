<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use phpbb\config\config;
use phpbb\auth\auth;
use phpbb\template\template;
use phpbb\user;
use phpbb\controller\helper;
use phpbb\request\request;
use phpbb\request\request_interface;
use phpbb\language\language;
use david63\privacypolicy\core\privacypolicy_lang;
use david63\privacypolicy\core\privacypolicy;
use phpbb\autogroups\conditions\manager;
use david63\privacypolicy\core\functions;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\auth\auth */
	protected $auth;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\controller\helper */
	protected $helper;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\language\language */
	protected $language;

	/* @var \david63\privacypolicy\core\privacypolicy_lang */
	protected $privacypolicy_lang;

	/** @var \david63\privacypolicy\core\privacypolicy */
	protected $privacypolicy;

	/** @var \david63\privacypolicy\core\functions */
	protected $functions;

	/** @var \phpbb\autogroups\conditions\manage */
	protected $autogroup_manager;

	/**
	* Constructor for listener
	*
	* @param \phpbb\config\config							$config				Config object
	* @param \phpbb\auth\auth 								$auth				Auth object
	* @param \phpbb\template\template						$template			Template object
	* @param \phpbb\user                					$user				User object
	* @param \phpbb\controller\helper						$helper				Helper object
	* @param \phpbb\request\request							$request			Request object
	* @param \phpbb\language\language						$language			Language object
	* @param \david63\privacypolicy\core\privacypolicy_lang	privacypolicy_lang	Methods for the extension
	* @param \david63\privacypolicy\core\functions			$functions			Functions for the extension
	* @param \phpbb\autogroups\conditions\manage			autogroup_manager	Autogroup manager
	*
	* @return \david63\privacypolicy\event\listener
	* @access public
	*/
	public function __construct(config $config, auth $auth, template $template, user $user, helper $helper, request $request, language $language, privacypolicy_lang $privacypolicy_lang, privacypolicy $privacypolicy, functions $functions, manager $autogroup_manager = null)
	{
		$this->config				= $config;
		$this->auth					= $auth;
		$this->template				= $template;
		$this->user					= $user;
		$this->helper				= $helper;
		$this->request				= $request;
		$this->language				= $language;
		$this->privacypolicy_lang	= $privacypolicy_lang;
		$this->privacypolicy		= $privacypolicy;
		$this->functions			= $functions;
		$this->autogroup_manager 	= $autogroup_manager;

		$this->cookie_set			= $this->request->is_set($this->config['cookie_name'] . '_ca', request_interface::COOKIE) ? true : false;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.page_footer'									=> 'page_footer',
			'core.page_header'									=> 'page_header',
			'core.permissions' 									=> 'add_permissions',
			'core.page_header_after'							=> 'check_cookie',
			'core.user_setup'									=> 'load_language_on_setup',
			'core.ucp_register_agreement_modify_template_data'	=> 'load_modified_agreement',
			'core.ucp_register_user_row_after'					=> 'add_acceptance_date',
			'core.modify_text_for_display_after'				=> 'insert_sitename',
			'core.update_session_after'							=> 'privacy_redirect',
			'core.display_custom_bbcodes_modify_sql'			=> 'display_bbcode',
			'core.acp_profile_create_edit_init'					=> 'add_visibility',
			'core.acp_profile_create_edit_after'				=> 'add_template_variables',
			'core.acp_profile_create_edit_save_before'			=> 'save_field',
			'core.user_add_after'								=> 'update_auto_groups',
			'core.modify_submit_post_data'						=> 'anonymise_posting_ip',
			'core.viewtopic_modify_poll_data'					=> 'anonymise_posting_ip',
			'core.submit_pm_before'								=> 'anonymise_pm_ip',
			'core.ucp_delete_cookies'							=> 'reset_cookie',
		);
	}

	/**
	* Set the template variables
	*
	* @param $event
	*
	* @return null
	* @access public
	*/
	public function page_footer($event)
	{
		$this->template->assign_vars(array(
			'S_ADMIN_EDIT'			=> false,
			'S_COOKIE_BLOCK_LINKS'	=> $this->config['cookie_block_links'],
			'S_COOKIE_ON_INDEX'		=> $this->config['cookie_on_index'],
			'S_COOKIE_SHOW_POLICY'	=> $this->config['cookie_show_policy'],
			'S_POLICY_ENABLED'		=> $this->config['privacy_policy_enable'],
			'S_POLICY_HIDE_CORE'	=> $this->config['privacy_policy_hide_core'],

			'U_COOKIE_PAGE'			=> $this->helper->route('david63_privacypolicy_policyoutput', array('name' => 'policy')),
		));

		// If breadcrumb extension is enabled then we need to disable it if we are blocking links
		if ($this->config['cookie_block_links'] && !$this->cookie_set)
		{
			$this->template->assign_var('BREADCRUMB_MENU', false);
		}
	}

	/**
	* Create the options to show the cookie acceptance box
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function page_header($event)
	{
		if ($this->config['cookie_policy_enable'] && !$this->user->data['is_bot'] && !$this->cookie_set)
		{
			$this->template->assign_vars(array(
				'COOKIE_BOX_BD_COLOUR'		=> $this->config['cookie_box_bdr_colour'],
				'COOKIE_BOX_BD_WIDTH'		=> $this->config['cookie_box_bdr_width'],
				'COOKIE_BOX_BG_COLOUR'		=> $this->config['cookie_box_bg_colour'],
				'COOKIE_BOX_HREF_COLOUR'	=> $this->config['cookie_box_href_colour'],
				'COOKIE_BOX_TOP'			=> $this->config['cookie_box_top'],
				'COOKIE_BOX_TXT_COLOUR'		=> $this->config['cookie_box_txt_colour'],
				'COOKIE_DOMAIN'				=> $this->config['cookie_domain'],
				'COOKIE_EXPIRES'			=> $this->config['cookie_expire'],
				'COOKIE_NAME'				=> $this->config['cookie_name'],
				'COOKIE_PATH'		   		=> $this->config['cookie_path'],
				'COOKIE_SECURE'				=> $this->config['cookie_secure'],
			));
		}

		$this->template->assign_vars(array(
			'PP_NAMESPACE'			=> $this->functions->get_ext_namespace('twig'),

			'S_COOKIE_ENABLED'		=> $this->config['cookie_policy_enable'],
			'S_SHOW_COOKIE_ACCEPT'	=> $this->cookie_set,
		));
	}

	/**
	* Add the new permissions
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function add_permissions($event)
	{
		$permissions					= $event['permissions'];
		$permissions['a_privacy_view']	= array('lang' => 'ACL_A_PRIVACY_VIEW', 'cat' => 'misc');
		$permissions['u_privacy_view']	= array('lang' => 'ACL_U_PRIVACY_VIEW', 'cat' => 'profile');
		$event['permissions']			= $permissions;
	}

	/**
	* Block links if option set
	*
	* @param $event
	*
	* @return null
	* @static
	* @access public
	*/
	public function check_cookie($event)
	{
		if ($this->config['cookie_policy_enable'])
		{
			if ($this->config['cookie_require_access'] && !isset($_COOKIE[$this->config['cookie_name'] . '_ca']))
			{
				$this->template->assign_vars(array(
					'U_REGISTER'		=> $this->helper->route('david63_privacypolicy_policyoutput', array('name' => 'access')),
					'U_LOGIN_LOGOUT'	=> $this->helper->route('david63_privacypolicy_policyoutput', array('name' => 'access')),
				));
			}

			// Disable phpBB Cookie Notice
			$this->template->assign_var('S_COOKIE_NOTICE', false);

			// Let's remove the footer login box
			if (!$this->cookie_set)
			{
				$this->template->assign_var('S_IS_BOT', true);
			}
		}
	}

	/**
	* Load common privacy policy language files during user setup
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function load_language_on_setup($event)
	{
		// load the language files
		$lang_set_ext	= $event['lang_set_ext'];
		$lang_set_ext[]	= array(
			'ext_name' => $this->functions->get_ext_namespace(),
			'lang_set' => 'privacypolicy',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	* Load the modified agreement
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function load_modified_agreement($event)
	{
		if ($this->config['privacy_policy_enable'] && !$this->user->data['is_bot'])
		{
			$template_vars	= $event['template_vars'];
			$privacy_text 	= $this->privacypolicy_lang->get_text('terms_of_use_2', $this->user->data['user_lang']);

			$event->update_subarray('template_vars', 'L_TERMS_OF_USE', $this->user->lang('TERMS_OF_USE_CONTENT', $this->config['sitename'], generate_board_url()) . generate_text_for_display($privacy_text['privacy_lang_text'], $privacy_text['privacy_text_bbcode_uid'], $privacy_text['privacy_text_bbcode_bitfield'], 7));
		}
	}

	/**
	* Add the acceptance date to the user data
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function add_acceptance_date($event)
	{
		if ($this->config['privacy_policy_enable'])
		{
			$user_row 						= $event['user_row'];
			$user_row['user_accept_date'] 	= $user_row['user_regdate'];
			$event['user_row']				= $user_row;
		}
	}

	/**
	* Add the user into the Auto Groups - if installed
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function update_auto_groups($event)
	{
		// Update Auto Groups
		$this->privacypolicy->update_auto_groups($event['user_id']);
	}

	/**
	* Replace the placeholder with the sitename
	*
	* @param $event
	*
	* @return array
	* @static
	* @access public
	*/
	public function insert_sitename($event)
	{
		$text 			= $event['text'];
		$text 			= str_replace("%sitename%", $this->config['sitename'], $text);
		$event['text']	= $text;
	}

	/**
	* Redirect to the privacy policy acceptance page
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function privacy_redirect($event)
	{
		if ($this->config['privacy_policy_enable'] && $this->config['privacy_policy_force'] && $this->user->data['user_accept_date'] == 0 && !$this->user->data['is_bot'] && $this->user->data['user_id'] !== ANONYMOUS)
		{
			redirect($this->helper->route('david63_privacypolicy_acceptance'));
		}
	}

	/**
	* Remove the "hr" tag unless the user has permissions
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function display_bbcode($event)
	{
		if (!$this->auth->acl_get('a_privacy_manage'))
		{
			$sql_ary 			= $event['sql_ary'];
			$sql_ary 			= str_replace('b.display_on_posting = 1', 'b.display_on_posting = 1 AND b.bbcode_tag <> "hr"', $sql_ary);
			$event['sql_ary']	= $sql_ary;
		}
	}

	/**
	 * Manage new column in profile fields table (create/edit), init section
	 *
	 * @param object $event The event object
	 * @return void
	 */
	public function add_visibility($event)
	{
		// Add the language file
		$this->language->add_lang('acp_cpf_privacypolicy', $this->functions->get_ext_namespace());

		$action 		= $event['action'];
		$field_row		= $event['field_row'];
		$exclude 		= $event['exclude'];
		$visibility_ary	= $event['visibility_ary'];

		if ($action == 'create')
		{
			$field_row['field_privacy_show'] = 0;
		}

		$exclude[1][] 		= 'field_privacy_show';
		$visibility_ary[] 	= 'field_privacy_show';

		$event['field_row'] 		= $field_row;
		$event['exclude'] 			= $exclude;
		$event['visibility_ary'] 	= $visibility_ary;
	}

	/**
	 * Manage new column in profile fields table (create/edit), template vars
	 *
	 * @param object $event The event object
	 * @return void
	 */
	public function add_template_variables($event)
	{
		$field_data = $event['field_data'];

		if ($event['step'] == 1)
		{
			$this->template->assign_vars(array('S_FIELD_PRIVACY_SHOW' => ($field_data['field_privacy_show']) ? true : false));
		}
	}

	/**
	 * Manage new column in profile fields table (create/edit), save section
	 *
	 * @param object $event The event object
	 * @return void
	 */
	public function save_field($event)
	{
		$field_data 	= $event['field_data'];
		$profile_fields = $event['profile_fields'];

		$profile_fields['field_privacy_show'] = $field_data['field_privacy_show'];

		$event['profile_fields'] = $profile_fields;
	}

	/**
	* Anonymise IP address on posts & polls
	*
	* @param $event
	*
	* @return null
	* @access public
	*/
	public function anonymise_posting_ip($event)
	{
		if ($this->config['privacy_policy_anonymise'])
		{
			$this->user->ip = $this->config['privacy_policy_anonymise_ip'];
		}
	}

	/**
	* Anonymise IP address on PMs
	*
	* @param $event
	*
	* @return null
	* @access public
	*/
	public function anonymise_pm_ip($event)
	{
		if ($this->config['privacy_policy_anonymise'])
		{
			$data 					= $event['data'];
			$from_user_ip 			= $data['from_user_ip'];
			$from_user_ip 			= $this->config['privacy_policy_anonymise_ip'];
			$data['from_user_ip'] 	= $from_user_ip;
			$event['data'] 			= $data;
		}
	}

	/**
	* Delete the cookie acceptance cookie
	*
	* @param $event
	*
	* @return null
	* @access public
	*/
	public function reset_cookie($event)
	{
		if ($event['cookie_name'] == 'ca')
		{
			$this->user->set_cookie('ca', '', time() - 31536000);
		}
	}
}
