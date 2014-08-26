<?php


namespace Giada\Models;


class User extends \Phalcon\Mvc\Model
{
	protected $username;
	protected $password;

	public function getUsername()
	{
		return $this->username;
	}
	
	public function getPassword()
	{
		return $this->password;
	}
}


?>
