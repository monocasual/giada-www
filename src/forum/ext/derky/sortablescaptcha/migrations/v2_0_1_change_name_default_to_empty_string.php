<?php
/**
*
* @copyright (c) Derky <http://www.derky.nl>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace derky\sortablescaptcha\migrations;

class v2_0_1_change_name_default_to_empty_string extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\derky\sortablescaptcha\migrations\v2_0_0',
		);
	}

	public function update_schema()
	{
		return array(
			'change_columns' => array(
				$this->table_prefix . 'sortables_questions' => array(
					'name_left'		=> array('STEXT_UNI', ''),
					'name_right'	=> array('STEXT_UNI', ''),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'change_columns' => array(
				$this->table_prefix . 'sortables_questions' => array(
					'name_left'		=> array('STEXT_UNI', 0),
					'name_right'	=> array('STEXT_UNI', 0),
				),
			),
		);
	}
}
