<?php
/**
*
* @copyright (c) Derky <http://www.derky.nl>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace derky\sortablescaptcha\migrations;

class delete_bc_config extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\derky\sortablescaptcha\migrations\v2_0_0',
		);
	}

	public function effectively_installed()
	{
		// This migration will delete the sortables_bc config value.
		// So if the config value does not exist, don't run this migration
		return !isset($this->config['sortables_bc']);
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'delete_sortables_bc'))),
		);
	}

	public function delete_sortables_bc()
	{
		$this->config->delete('sortables_bc');
	}

}
