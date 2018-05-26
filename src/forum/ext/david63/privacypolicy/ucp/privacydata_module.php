<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\ucp;

class privacydata_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container;

		$this->tpl_name		= 'ucp_privacy_data';
		$this->page_title	= $phpbb_container->get('language')->lang('PRIVACY_POLICY');

		// Get an instance of the admin controller
		$ucp_controller = $phpbb_container->get('david63.privacypolicy.ucp.controller');

		$ucp_controller->privacy_output();
	}
}
