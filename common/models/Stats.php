<?php


namespace Giada\Models;


class Stats extends \Phalcon\Mvc\Model
{
	protected $version;
	protected $value;
	
	public function getValue()
	{
		return $this->value;
	}
	
	public function getVersion()
	{
		return $this->version;
	}
	
	public function increment()
	{
		$this->value += 1;
	}
}


?>
