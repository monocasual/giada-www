<?php

/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy;

use \phpbb\extension\base;

class ext extends base
{
	const PRIVACY_POLICY_VERSION = '2.1.0 RC5';

    /**
	* Enable extension if phpBB version requirement is met
	*
	* @var string Require 3.2.0-a1 due to updated 3.2 syntax
	*
	* @return bool
	* @access public
	*/
	public function is_enableable()
	{
		// Set globals for use in the language file
		global $ver_error, $cookie_error;

		// Requires phpBB 3.2.0 or newer.
		$ver 		= phpbb_version_compare(PHPBB_VERSION, '3.2.0', '>=');
		// Display a custom warning message if this requirement fails.
		$ver_error 	= ($ver) ? false : true;

		// Is Cookie Policy installed?
		$config	= $this->container->get('config');
		$cookie_policy	= !isset($config['cookie_policy_enabled']);
		// Display a custom warning message if this exists.
		$cookie_error 	= ($cookie_policy) ? false : true;

		// Need to cater for 3.1 and 3.2
		if (phpbb_version_compare(PHPBB_VERSION, '3.2.0', '>='))
		{
			$this->container->get('language')->add_lang('ext_enable_error', 'david63/privacypolicy');
		}
		else
		{
			$this->container->get('user')->add_lang_ext('david63/privacypolicy', 'ext_enable_error');
		}

		return $ver && $cookie_policy;
	}
}
