<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\acp;

class privacypolicy_info
{
	function module()
	{
		return array(
			'filename'	=> '\david63\privacypolicy\acp\privacypolicy_module',
			'title'		=> 'PRIVACY_POLICY',
			'modes'		=> array(
				'manage'	=> array('title' => 'PRIVACY_POLICY_MANAGE', 'auth' => 'ext_david63/privacypolicy && acl_a_privacy_manage', 'cat' => array('PRIVACY_POLICY')),
				'edit'		=> array('title' => 'PRIVACY_POLICY_EDIT', 'auth' => 'ext_david63/privacypolicy && acl_a_privacy_manage', 'cat' => array('PRIVACY_POLICY')),
			),
		);
	}
}
