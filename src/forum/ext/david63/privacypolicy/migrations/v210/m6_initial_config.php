<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\migrations\v210;

use phpbb\db\migration\migration;

class m6_initial_config extends migration
{
	/**
	* Assign migration file dependencies for this migration
	*
	* @return array Array of migration files
	* @static
	* @access public
	*/
	static public function depends_on()
	{
		return array('\david63\privacypolicy\migrations\v210\m1_initial_schema');
	}

	/**
	* Add or update data in the database
	*
	* @return array Array of table data
	* @access public
	*/
	public function update_data()
	{
		return array(
			array('config.add', array('cookie_block_links', 0)),
			array('config.add', array('cookie_box_bdr_colour', '#FFFF8A')),
			array('config.add', array('cookie_box_bdr_width', 1)),
			array('config.add', array('cookie_box_bg_colour', '#00608F')),
			array('config.add', array('cookie_box_href_colour', '#FFFFFF')),
			array('config.add', array('cookie_box_txt_colour', '#DBDB00')),
			array('config.add', array('cookie_custom_page', 0)),
			array('config.add', array('cookie_custom_page_corners', 1)),
			array('config.add', array('cookie_custom_page_radius', 7)),
			array('config.add', array('cookie_expire', 0)),
			array('config.add', array('cookie_last_ip', '')),
			array('config.add', array('cookie_on_index', 1)),
			array('config.add', array('cookie_page_bg_colour', '#FFFFFF')),
			array('config.add', array('cookie_page_txt_colour', '#000000')),
			array('config.add', array('cookie_policy_enable', 0)),
			array('config.add', array('cookie_require_access', 0)),
			array('config.add', array('cookie_quota_exceeded', 0)),
			array('config.add', array('cookie_show_policy', 0)),
			array('config.add', array('privacy_policy_enable', 0)),
			array('config.add', array('privacy_policy_force', 0)),
			array('config.add', array('privacy_policy_list_lines', 25)),
			array('config.add', array('privacy_policy_reset', 0)),
		);
	}
}
