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

class m1_initial_schema extends migration
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
		return array('\phpbb\db\migration\data\v320\v320');
	}

	/**
	* Add the table schemas to the database:
	*
	* @return array Array of table schema
	* @access public
	*/
	public function update_schema()
	{
		return array(
			'add_tables' => array(
				$this->table_prefix . 'privacy_lang' => array(
					'COLUMNS'	=> array(
						'privacy_id'        			=> array('UINT', null, 'auto_increment'),
						'privacy_lang_name'				=> array('VCHAR:40', ''),
						'privacy_lang_description'		=> array('VCHAR:40', ''),
						'privacy_lang_id'				=> array('VCHAR:30', ''),
						'privacy_lang_text'				=> array('MTEXT', ''),
						'privacy_text_bbcode_uid'		=> array('VCHAR:8', ''),
						'privacy_text_bbcode_bitfield'	=> array('VCHAR:255', ''),
						'privacy_text_bbcode_options'	=> array('UINT:11', 7),
					),
					'PRIMARY_KEY' => 'privacy_id',
				),
			),

			'add_columns' => array(
				$this->table_prefix . 'users' => array(
					'user_accept_date' => array('UINT:11', 0),
				),
			),
		);
	}

	/**
	* Drop the schemas from the database
	*
	* @return array Array of table schema
	* @access public
	*/
	public function revert_schema()
	{
		return array(
			'drop_tables'	=> array(
				$this->table_prefix . 'privacy_lang',
			),

			'drop_columns' => array(
				$this->table_prefix . 'users' => array(
					'user_accept_date',
				),
			),
		);
	}
}
