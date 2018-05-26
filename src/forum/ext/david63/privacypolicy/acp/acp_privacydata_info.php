<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\acp;

class acp_privacydata_info
{
	function module()
	{
		return array(
			'filename'	=> '\david63\privacypolicy\acp\acp_privacydata_module',
			'title'		=> 'PRIVACY_POLICY',
			'modes'		=> array(
				'data'	=> array('title' => 'PRIVACY_DATA', 'auth' => 'ext_david63/privacypolicy && acl_a_privacy_view', 'cat' => array('PRIVACY_DATA')),
				'list'	=> array('title' => 'PRIVACY_LIST', 'auth' => 'ext_david63/privacypolicy && acl_a_privacy_view', 'cat' => array('PRIVACY_LIST')),
			),
		);
	}
}
