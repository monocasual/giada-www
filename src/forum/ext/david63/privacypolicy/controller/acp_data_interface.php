<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\controller;

/**
* Interface for our data controller
*
* This describes all of the methods we'll use for the admin front-end of this extension
*/
interface acp_data_interface
{
	/**
	* Display the user's data
	*
	* @return null
	* @access public
	*/
	public function display_data();

	public function display_list();

	/**
	* Set page url
	*
	* @param string $u_action Custom form action
	* @return null
	* @access public
	*/
	public function set_page_url($u_action);
}
