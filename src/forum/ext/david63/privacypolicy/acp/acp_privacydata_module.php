<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\acp;

class acp_privacydata_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container;

		$this->page_title = $phpbb_container->get('language')->lang('PRIVACY_POLICY');

		// Get an instance of the data controller
		$data_controller = $phpbb_container->get('david63.privacypolicy.acp.data.controller');

		// Make the $u_action url available in the data controller
		$data_controller->set_page_url($this->u_action);

		switch ($mode)
		{
			case 'data':
				$this->tpl_name = 'privacy_policy_data';
				$data_controller->display_data();
			break;

			case 'list':
				$this->tpl_name = 'privacy_policy_list';
				$data_controller->display_list();
			break;
		}
	}
}
