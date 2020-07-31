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

class m3_initial_permissions extends migration
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
			// Add the permissions
			array('permission.add', array('a_privacy_manage', true)),
			array('permission.add', array('a_privacy_view', true)),
			array('permission.add', array('u_privacy_view', true)),

			// Set permissions
			array('permission.permission_set', array('ROLE_ADMIN_FULL', 'a_privacy_manage', 'role', true)),
			array('permission.permission_set', array('ROLE_ADMIN_FULL', 'a_privacy_view', 'role', true)),
			array('permission.permission_set', array('ROLE_ADMIN_STANDARD', 'a_privacy_view', 'role', true)),
			array('permission.permission_set', array('ROLE_USER_FULL', 'u_privacy_view', 'role', true)),
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_privacy_view', 'role', true)),
			array('permission.permission_set', array('REGISTERED', 'u_privacy_view', 'group', true)),
			array('permission.permission_set', array('BOTS', 'u_privacy_view', 'group', false)),
		);
	}
}
