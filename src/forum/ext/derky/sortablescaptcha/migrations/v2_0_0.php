<?php
/**
*
* @copyright (c) Derky <http://www.derky.nl>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace derky\sortablescaptcha\migrations;

class v2_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->db_tools->sql_table_exists($this->table_prefix . 'sortables_questions');
	}

	public function update_schema()
	{
		return array(
			'add_tables'		=> array(
				$this->table_prefix . 'sortables_questions'	=> array(
					'COLUMNS' => array(
						'question_id'	=> array('UINT', null, 'auto_increment'),
						'sort'			=> array('BOOL', 0),
						'lang_id'		=> array('UINT', 0),
						'lang_iso'		=> array('VCHAR:30', ''),
						'question_text'	=> array('TEXT_UNI', ''),
						'name_left'		=> array('STEXT_UNI', 0), // Column names
						'name_right'	=> array('STEXT_UNI', 0),
					),
					'PRIMARY_KEY'		=> 'question_id',
					'KEYS'				=> array(
						'iso'			=> array('INDEX', 'lang_iso'),
					),
				),
				$this->table_prefix . 'sortables_answers' => array(
					'COLUMNS' => array(
						'answer_id'		=> array('UINT', null, 'auto_increment'),
						'question_id'	=> array('UINT', 0),
						'answer_sort'	=> array('BOOL', 0),
						'answer_text'	=> array('STEXT_UNI', ''),
					),
					'PRIMARY_KEY'		=> 'answer_id',
					'KEYS'				=> array(
						'qid'			=> array('INDEX', 'question_id'),
						'asort'			=> array('INDEX', 'answer_sort'),
					),
				),
				$this->table_prefix . 'sortables_confirm' => array(
					'COLUMNS' => array(
						'session_id'	=> array('CHAR:32', ''),
						'confirm_id'	=> array('CHAR:32', ''),
						'lang_iso'		=> array('VCHAR:30', ''),
						'question_id'	=> array('UINT', 0),
						'attempts'		=> array('UINT', 0),
						'confirm_type'	=> array('USINT', 0),
					),
					'KEYS'				=> array(
						'sid'			=> array('INDEX', 'session_id'),
						'lookup'		=> array('INDEX', array('confirm_id', 'session_id', 'lang_iso')),
					),
					'PRIMARY_KEY'		=> 'confirm_id',
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_tables'		=> array(
				$this->table_prefix . 'sortables_questions',
				$this->table_prefix . 'sortables_answers',
				$this->table_prefix . 'sortables_confirm',
			),
		);
	}
}
