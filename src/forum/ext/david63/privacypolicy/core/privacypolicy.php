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
use phpbb\template\template;
use phpbb\user;
use phpbb\language\language;
use phpbb\db\driver\driver_interface;
use phpbb\event\dispatcher_interface;
use phpbb\di\service_collection;
use phpbb\autogroups\conditions\manager;
use david63\privacypolicy\core\functions;

/**
* privacypolicy
*/
class privacypolicy
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\language\language */
	protected $language;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\event\dispatcher_interface */
	protected $dispatcher;

	/** @var \phpbb\di\service_collection */
	protected $type_collection;

	/** @var string phpBB root path */
	protected $root_path;

	/** @var string PHP extension */
	protected $phpEx;

	/** @var \david63\privacypolicy\core\functions */
	protected $functions;

	/** @var string phpBB tables */
	protected $tables;

	/** @var \phpbb\autogroups\conditions\manage */
	protected $autogroup_manager;

	/** @var string Custom form action */
	protected $u_action;

	/**
	* Constructor for privacypolicy
	*
	* @param \phpbb\config\config					$config				Config object
	* @param \phpbb\template\template				$template			Template object
	* @param \phpbb\user							$user				User object
	* @param \phpbb\language\language				$language			Language object
	* @param \phpbb_db_driver						$db					The db connection
	* @param dispatcher_interface					$dispatcher			phpBB dispatcher
	* @param \phpbb\di\service_collection 			$type_collection	CPF data
	* @param string									$phpbb_root_path    phpBB root path
	* @param string									$php_ext            phpBB extension
	* @param \david63\privacypolicy\core\functions	$functions			Functions for the extension
	* @param array									$tables				phpBB db tables
	* @param \phpbb\autogroups\conditions\manage	autogroup_manager	Autogroup manager
	*
	* @access public
	*/
	public function __construct(config $config, template $template, user $user, language $language, driver_interface $db, dispatcher_interface $dispatcher, service_collection $type_collection, $root_path, $php_ext, functions $functions, $tables, manager $autogroup_manager = null)
	{
		$this->config				= $config;
		$this->template				= $template;
		$this->user					= $user;
		$this->language				= $language;
		$this->db					= $db;
		$this->dispatcher			= $dispatcher;
		$this->type_collection 		= $type_collection;
		$this->root_path			= $root_path;
		$this->php_ext				= $php_ext;
		$this->functions			= $functions;
		$this->tables				= $tables;
		$this->autogroup_manager	= $autogroup_manager;
	}

	/**
	* Display the user privacy data
	*
	* @return null
	* @access public
	*/
	public function display_privacy_data($user_id)
	{
		$row = $this->get_user_data_row ($user_id);

		// Set output vars for display in the template
		$this->template->assign_vars(array(
			'ACCEPT_DATE'				=> ($row['user_accept_date'] > 0) ? $this->user->format_date($row['user_accept_date']) : $this->language->lang('NOT_ACCEPTED'),
			'BANNER'					=> $this->language->lang('DETAILS_FOR', $row['username']),
			'BIRTHDAY'					=> $this->get_birthday($row['user_birthday']),

			'EMAIL'						=> $row['user_email'],

			'REG_DATE'					=> $this->user->format_date($row['user_regdate']),
			'REG_IP'					=> $row['user_ip'],

			'USER'						=> $row['username'],
			'U_EMAIL'					=> 'mailto:' . $this->config['board_email'] . '?subject=' . $this->language->lang('REMOVE_MY_ACCOUNT') . '&body=' . $this->language->lang('REMOVE_MY_ACCOUNT_BODY', '%0D%0A', $row['username']),

			'S_ACCEPTED'				=> ($row['user_accept_date'] > 0) ? true : false,
		));

		// Get the core CPF data fields
		$cpf_fields = $this->get_cpf_fields();

		// Get the CPF data for this user
		$cpf_user_data = $this->get_cpf_user_data($user_id);

		$template_array = array_merge_recursive($cpf_fields, $cpf_user_data);

		foreach ($template_array as $key => $data)
		{
			if (array_key_exists($key, $cpf_fields))
			{
				$this->template->assign_block_vars('cpf_data', array(
					'FIELD_NAME' => $data[0],
					'FIELD_DATA' => $data[1],
				));
			}
		}

		/**
		* Event to allow adding additional user's privacy data
		*
		* @event david63.privacypolicy.add_data_after
		*
		* @var	array	row		The row data
		*
		* @since 2.1.0
		*/
		$vars = array(
			'row',
		);
		extract($this->dispatcher->trigger_event('david63.privacypolicy.add_data_after', compact($vars)));

		$this->template->assign_var('USER_IPS', $this->get_user_ips($user_id));
	}

	/**
	* Create the CSV output file
	*
	* @return null
	* @access public
	*/
	public function create_csv($username, $user_id)
	{
		$csv_file = $csv_header = $csv_data = '';

		$row 			= $this->get_user_data_row ($user_id);
		$birthdate 		= $this->get_birthday($row['user_birthday']);
		$accept_date	= ($row['user_accept_date'] > 0) ? $this->user->format_date($row['user_accept_date']) : $this->language->lang('NOT_ACCEPTED');

		// Create the CSV file
		$filename	= 'phpBB_Privacy_Data_' . $username . '_' . date('Ymd') . '.csv';
		$fp 		= fopen('php://output', 'w');

		$csv_header = $this->language->lang('USERNAME') . ',' . $this->language->lang('BIRTHDAY') . ',' . $this->language->lang('REG_DATE') . ',' . $this->language->lang('ACCEPT_DATE') . ',' . $this->language->lang('EMAIL') . ',';
		$csv_data 	= '"' . $username . '","' . $birthdate . '","' . $this->user->format_date($row['user_regdate']) . '","' . $accept_date . '","' . $row['user_email'] . '","';

		/**
		* Event to allow adding additional user's privacy data to the CSV file
		*
		* @event david63.privacypolicy.add_csv_data_after
		*
		* @var	string	csv_header	The CSV header row
		* @var	string	csv_data	The CSV data row
		*
		* @since 2.1.0
		*/
		$vars = array(
			'csv_header',
			'csv_data',
		);
		extract($this->dispatcher->trigger_event('david63.privacypolicy.add_csv_data_after', compact($vars)));

		// Add the CPF field data
		// Get the core CPF data fields
		$cpf_fields = $this->get_cpf_fields();

		// Get the CPF data for this user
		$cpf_user_data = $this->get_cpf_user_data($user_id);

		$csv_array = array_merge_recursive($cpf_fields, $cpf_user_data);

		foreach ($csv_array as $key => $data)
		{
			if (array_key_exists($key, $cpf_fields))
			{
				$csv_header .= $data[0]  . ',';
				$csv_data	.= strip_tags($data[1]) . '","';
			}
		}

		/**
		* Event to allow adding additional user's privacy data to the CSV file
		*
		* @event david63.privacypolicy.add_csv_cpf_after
		*
		* @var	string	csv_header	The CSV header row
		* @var	string	csv_data	The CSV data row
		*
		* @since 2.1.0
		*/
		$vars = array(
			'csv_header',
			'csv_data',
		);
		extract($this->dispatcher->trigger_event('david63.privacypolicy.add_csv_cpf_after', compact($vars)));

		$ip_addresses = $this->get_user_ips($user_id);
		$ip_addresses = str_replace('<br>', $this->language->lang('COMMA_SEPARATOR'), $ip_addresses);
		$ip_addresses = rtrim($ip_addresses, ', ');

		$csv_header .= $this->language->lang('REG_IP') . ',' . $this->language->lang('USER_IPS') . "\n";
		$csv_data 	.= $row['user_ip'] . '","' . $ip_addresses . '"' . "\n";

		/**
		* Event to allow adding additional user's privacy data to the CSV file
		*
		* @event david63.privacypolicy.add_csv_ip_after
		*
		* @var	string	csv_header	The CSV header row
		* @var	string	csv_data	The CSV data row
		*
		* @since 2.1.0
		*/
		$vars = array(
			'csv_header',
			'csv_data',
		);
		extract($this->dispatcher->trigger_event('david63.privacypolicy.add_csv_ip_after', compact($vars)));

		// Merge the header and data files
		$csv_file = $csv_header . $csv_data;

		// Output the CSV file
		header('Content-Type: application/octet-stream');
		header("Content-disposition: attachment; filename=\"" . basename($filename) . "\"");
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Cache-Control: private', false);
		header('Pragma: public');
		header('Content-Transfer-Encoding: binary');

		fwrite($fp, "\xEF\xBB\xBF"); // UTF-8 BOM
		fwrite($fp, $csv_file);
		fclose($fp);

		// The file has been output so stop
		exit_handler();
	}

	/**
	 * Get the user data
	 *
	 * @param $user_id
	 *
	 * @return array $row
	 * @access public
	 */
	public function get_user_data_row ($user_id)
	{
		// Get the user data
		$sql = 'SELECT *
			FROM ' . $this->tables['users'] . '
			WHERE user_id = ' . (int) $user_id;

		$result = $this->db->sql_query($sql);
		$row	= $this->db->sql_fetchrow($result);

		$this->db->sql_freeresult($result);

		return $row;
	}

	/**
	 * Get the IPs that this user has used
	 *
	 * @param $user_id
	 *
	 * @return string $user_ips
	 * @access public
	 */
	public function get_user_ips($user_id)
	{
		if ($this->config['privacy_policy_anonymise'])
		{
			return $this->language->lang('IP_ANONYMISED');
		}
		else
		{
			$sql = 'SELECT poster_ip
				FROM ' . $this->tables['posts'] . '
				WHERE poster_id = ' . (int) $user_id . "
				GROUP BY poster_ip";

			$result = $this->db->sql_query($sql);

			$user_ips = array();
			while ($row = $this->db->sql_fetchrow($result))
			{
				if ($row['poster_ip'])
				{
					$user_ips[] = $row['poster_ip'];
				}
			}
		}
		$this->db->sql_freeresult($result);

		if (!sizeof($user_ips))
		{
			return $this->language->lang('NO_IPS_FOUND');
		}
		else
		{
			natsort($user_ips);
			return implode('<br>', $user_ips);
		}
	}

	/**
	 * Format the date of birth
	 *
	 * @param $birthday
	 *
	 * @return string $birthdate
	 * @access public
	 */
	public function get_birthday($birthday)
	{
		$birthday	= explode('-', $birthday);
		$birthdate	= '';

		if ($birthday[0] > 0 && $birthday[1] > 0)
		{
			$dateObj 	= \DateTime::createFromFormat('!m', (int) $birthday[1]);
			$birthdate	= $birthday[0] . ' ' . $this->language->lang_raw('datetime')[$dateObj->format('F')];
			if ($birthday[2] > 0)
			{
				$birthdate .= ' ' . $birthday[2];
			}
		}

		$birthdate = ($birthdate) ? $birthdate : $this->language->lang('NO_BIRTHDAY');

		return $birthdate;
	}

	/**
	 * Get an array of the user's CPF data
	 *
	 * @param $user_id
	 *
	 * @return array $cpf_user_data
	 * @access public
	 */
	public function get_cpf_user_data($user_id)
	{
		$sql = $this->db->sql_build_query('SELECT', array(
			'SELECT'	=> 'pfd.*',
			'FROM'		=> array(
				$this->tables['users'] => 'u',
			),
			'LEFT_JOIN'	=> array(
				array(
					'FROM'	=> array($this->tables['profile_fields_data']	=> ' pfd',),
					'ON'	=> 'u.user_id = pfd.user_id',
				),
			),
			'WHERE' => "u.user_id = '" . (int) $user_id . "'",
		));

		$result 		= $this->db->sql_query($sql);
		$cpf_user_data	= $this->db->sql_fetchrow($result);

		$this->db->sql_freeresult($result);

		foreach ($cpf_user_data as $key => $data)
		{
			if ($key != 'user_id')
			{
				$user_data[$key] = ($data) ? $this->get_cpf_data($data, $key) : $this->language->lang('NO_DATA_ENTERED');
			}
		}

		return $user_data;
	}

	/**
	 * Get a list of the CPFs
	 *
	 * @return array $pf_fields_array
	 * @access public
	 */
	public function get_cpf_fields()
	{
		$sql = 'SELECT pf.field_name, pl.lang_name
			FROM ' . $this->tables['profile_fields'] . ' pf, ' . $this->tables['profile_fields_language'] . ' pl, ' . $this->tables['lang'] . " l
			WHERE pf.field_id  = pl.field_id
				AND pf.field_privacy_show = 1
				AND pl.lang_id = l.lang_id
				AND pf.field_active = 1
				AND l.lang_iso = '" . $this->user->data['user_lang'] . "'
				ORDER BY pf.field_id ASC";

		$result	= $this->db->sql_query($sql);

		$pf_fields_array = array();

		while ($row = $this->db->sql_fetchrow($result))
		{
			$pf_fields_array['pf_' . $row['field_name']] = ucfirst(strtolower($row['lang_name']));
		}

		$this->db->sql_freeresult($result);

		return $pf_fields_array;
	}

	/**
	 * Get the CPF values
	 *
	 * @param $field_value
	 * @param $field_name
	 *
	 * @return $value
	 * @access public
	 */
	public function get_cpf_data($field_value, $field_name)
	{
		// Remove 'pf_' from the field name
		$field_name = substr($field_name, 3);

		// Get the field data
		$sql = $this->db->sql_build_query('SELECT', array(
			'SELECT'	=> 'pf.*, pfl.lang_id, pfl.option_id, pfl.lang_value',
			'FROM'		=> array(
				$this->tables['profile_fields'] => 'pf',
			),
			'LEFT_JOIN'	=> array(
				array(
					'FROM'	=> array($this->tables['profile_fields_options_language']	=> ' pfl',),
					'ON'	=> 'pf.field_id = pfl.field_id',
				),
			),
			'WHERE' => "pf.field_name = '" . $field_name . "'",
		));

		$result			= $this->db->sql_query($sql);
		$profile_data	= $this->db->sql_fetchrow($result);

		$this->db->sql_freeresult($result);

		$profile_field = $this->type_collection[$profile_data['field_type']];

		return $profile_field->get_profile_value($field_value, $profile_data);
	}

	/**
	 * Update Auto Groups (if installed)
	 *
	 * @param $user_id
	 *
	 * @return null
	 * @access public
	 */
	public function update_auto_groups($user_id, $sync = false)
	{
		// This conditional must be used to ensure calls only go out if Auto Groups is installed/enabled
		if ($this->autogroup_manager !== null)
		{
			if (!$sync)
			{
				// This calls our class and sends it some $options data
				$this->autogroup_manager->check_condition('david63.privacypolicy.autogroups.type.ppaccept', array(
					'users' => $user_id,
				));
			}
			else
			{
				$this->autogroup_manager->check_condition('david63.privacypolicy.autogroups.type.ppaccept', array(
					'action' => 'sync',
				));
			}
		}
	}

	/**
	* Check for Tapatalk enabled
	*
	* @return null
	* @access public
	*/
	public function tapatalk($error = true)
	{
		$sql = 'SELECT *
			FROM ' . $this->tables['ext'] . "
			WHERE ext_name = 'tapatalk/tapatalk'";

		$result	= $this->db->sql_query($sql);
		$row 	= $this->db->sql_fetchrow($result);

		$this->db->sql_freeresult($result);

		$tapatalk_installed = ($row && $row['ext_active'] == 1) ? true : false;

		if ($error)
		{
			$this->template->assign_var('S_ERROR', $tapatalk_installed);
		}
		else
		{
			return $tapatalk_installed;
		}
	}

	/**
	* Set page url
	*
	* @param string $u_action Custom form action
	* @return null
	* @access public
	*/
	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
