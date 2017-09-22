<?php
/**
*
* @copyright (c) Derky <http://www.derky.nl>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace derky\sortablescaptcha\migrations;

class migrate_pre_3_0_9_tables extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\derky\sortablescaptcha\migrations\v2_0_0',
		);
	}

	public function effectively_installed()
	{
		return !$this->db_tools->sql_table_exists($this->table_prefix . 'captcha_sortables_questions');
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'migrate_data_from_old_tables'))),
		);
	}

	public function migrate_data_from_old_tables()
	{
		$old_new_tables = array(
			$this->table_prefix . 'captcha_sortables_questions'	=> $this->table_prefix . 'sortables_questions',
			$this->table_prefix . 'captcha_sortables_answers'	=> $this->table_prefix . 'sortables_answers',
			$this->table_prefix . 'captcha_sortables_confirm'	=> $this->table_prefix . 'sortables_confirm'
		);

		// Loop through the tables
		foreach ($old_new_tables as $old_table => $new_table) {

			// Create an insert buffer for the new table
			$insert_buffer = new \phpbb\db\sql_insert_buffer($this->db, $new_table);

			// Select everything from the old table
			$sql = 'SELECT *
					FROM ' . $old_table;
			$result = $this->db->sql_query($sql);
			while ($row = $this->db->sql_fetchrow($result))
			{
				// And add it to the buffer
				$insert_buffer->insert($row);
			}
			$this->db->sql_freeresult($result);

			// Insert everything into the new table
			$insert_buffer->flush();

			// Unset the insert buffer for the current table
			unset($insert_buffer);

			// Remove table
			$this->db_tools->sql_table_drop($old_table);
		}
	}

}
