<?php


namespace Giada\Common\Services;


class JsonService
{
	private $curl;

	/* ---------------------------------------------------------------- */
	
	public function init($url, $pwd=false)
	{
		$this->curl = curl_init($url);
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->curl, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($this->curl, CURLOPT_USERAGENT,      'curl');
		if ($pwd)
			curl_setopt($this->curl, CURLOPT_USERPWD, $pwd);
	}	
	
	/* ---------------------------------------------------------------- */
	
	public function get($assoc=false)
	{
		return json_decode(curl_exec($this->curl), $assoc);		
	}
	
	/* ---------------------------------------------------------------- */
	
	public function __destruct()
	{
		curl_close($this->curl);
	}
}


?>
