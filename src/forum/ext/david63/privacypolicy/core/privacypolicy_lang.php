<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\core;

use phpbb\config\config;
use phpbb\user;
use phpbb\language\language;
use phpbb\db\driver\driver_interface;
use phpbb\template\template;

/**
* privacypolicy
*/
class privacypolicy_lang
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\language\language */
	protected $language;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var string phpBB tables */
	protected $tables;

	/**
	* Constructor for privacypolicy
	*
	* @param \phpbb\config\config		$config		Config object
	* @param \phpbb\user				$user		User object
	* @param \phpbb\language\language	$language	Language object
	* @param \phpbb_db_driver			$db			The db connection
	* @param \phpbb\template\template	$template	Template object
	* @param array						$tables		phpBB db tables
	*
	* @access public
	*/
	public function __construct(config $config, user $user, language $language, driver_interface $db, template $template, $tables)
	{
		$this->config				= $config;
		$this->user					= $user;
		$this->language 			= $language;
		$this->db					= $db;
		$this->template				= $template;
		$this->tables				= $tables;
	}

	/**
	* Display the user privacy data
	*
	* @return null
	* @access public
	*/
	public function get_lang_data($lang_name)
	{
		// Does the language/text file combination exist?
		$lang_valid = $this->validate_lang($lang_name, $this->user->data['user_lang']);
		if ($lang_valid)
		{
			$lang_id = $this->user->data['user_lang'];
		}
		else
		{
			// Does board default language/text file combination exist?
			$lang_valid = $this->validate_lang($lang_name, $this->config['default_lang']);
			if ($lang_valid)
			{
				$lang_id = $this->config['default_lang'];
			}
			else
			{
				// Use 'en' language
				$lang_id = 'en';
			}
		}

		$sql = 'SELECT privacy_lang_text
			FROM ' . $this->tables['privacy_lang'] . '
				WHERE privacy_lang_name = ' . "'$lang_name'" . '
				AND privacy_lang_id = ' . "'$lang_id'";

		$result = $this->db->sql_query($sql);
		$row 	= $this->db->sql_fetchrow($result);

		$this->db->sql_freeresult($result);

		return $row['privacy_lang_text'];
	}

	/**
	* Validate that a user's language exists
	*
	* @return $row
	* @access public
	*/
	public function validate_lang($lang_name, $lang_id)
	{
		$sql = 'SELECT privacy_lang_text
			FROM ' . $this->tables['privacy_lang'] . '
				WHERE privacy_lang_name = ' . "'$lang_name'" . '
				AND privacy_lang_id = ' . "'$lang_id'";

		$result = $this->db->sql_query($sql);
		$row 	= $this->db->sql_fetchrow($result);

		return $row;
	}

	/**
	* Get the text data for a policy
	*
	* @return $row
	* @access public
	*/
	public function get_text($lang_name, $lang_id, $validate = true)
	{
		if ($validate)
		{
			// Is the user a Guest? If so then we need to default
			if ($this->user->data['user_id'] == ANONYMOUS)
			{
				$lang_valid = true;
			}
			else
			{
				// Does the language/text file combination exist?
				$lang_valid = $this->validate_lang($lang_name, $lang_id);
			}

			if (!$lang_valid)
			{
				// Does board default language/text file combination exist?
				$lang_valid = $this->validate_lang($lang_name, $this->config['default_lang']);

				if ($lang_valid)
				{
					$lang_id = $this->config['default_lang'];
				}
				else
				{
					// Use 'en' language
					$lang_id = 'en';
				}
			}
		}

		$sql = 'SELECT *
			FROM ' . $this->tables['privacy_lang'] . '
				WHERE privacy_lang_name = ' . "'$lang_name'" . '
				AND privacy_lang_id = ' . "'$lang_id'";

		$result = $this->db->sql_query($sql);
		$row 	= $this->db->sql_fetchrow($result);

		$this->db->sql_freeresult($result);

		return $row;
	}

	/**
	* Get the description of a policy
	*
	* @return $row['privacy_lang_description']
	* @access public
	*/
	public function get_description($lang_name, $lang_id)
	{
		$sql = 'SELECT privacy_lang_description
			FROM ' . $this->tables['privacy_lang'] . '
				WHERE privacy_lang_name = ' . "'$lang_name'" . '
				AND privacy_lang_id = ' . "'$lang_id'";

		$result = $this->db->sql_query($sql);
		$row 	= $this->db->sql_fetchrow($result);

		$this->db->sql_freeresult($result);

		return $row['privacy_lang_description'];
	}

	/**
	* Get the policy names for the select
	*
	* @return null
	* @access public
	*/
	public function get_text_names()
	{
		$sql = 'SELECT privacy_lang_name, privacy_lang_description
			FROM ' . $this->tables['privacy_lang'] . '
			ORDER BY privacy_lang_description ASC';

		$result = $this->db->sql_query($sql);
		$rows 	= $this->db->sql_fetchrowset($result);

		$this->db->sql_freeresult($result);

		foreach ($rows as $row)
		{
			$this->template->assign_block_vars('texts', array(
				'LANG_NAME'			=> $row['privacy_lang_name'],
				'LANG_DESCRIPTION'	=> $row['privacy_lang_description'],
			));
		}
	}

	/**
	* Get the board languages for the select
	*
	* @return null
	* @access public
	*/
	public function get_languages()
	{
		$sql = 'SELECT lang_iso, lang_local_name
			FROM ' . $this->tables['lang'] . '
			ORDER BY lang_english_name';

		$result	= $this->db->sql_query($sql);
		$rows 	= $this->db->sql_fetchrowset($result);

		$this->db->sql_freeresult($result);

		foreach ($rows as $row)
		{
			$this->template->assign_block_vars('langs', array(
				'S_LANG_DEFAULT'	=> $row['lang_iso'] == $this->config['default_lang'],

				'LANG_ID'			=> $row['lang_iso'],
				'LANG_LOCAL_NAME'	=> $row['lang_local_name'],
			));
		}
	}

	/**
	* Get the board languages for the select
	*
	* @return null
	* @access public
	*/
	public function get_lang_name($lang_iso)
	{
		$sql = 'SELECT lang_local_name
			FROM ' . $this->tables['lang'] . '
			WHERE lang_iso = ' . "'$lang_iso'";

		$result	= $this->db->sql_query($sql);
		$row 	= $this->db->sql_fetchrow($result);

		$this->db->sql_freeresult($result);

		if ($row)
		{
			return $row['lang_local_name'];
		}
	}
}
