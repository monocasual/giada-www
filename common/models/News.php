<?php


namespace Giada\Models;


class News extends \Phalcon\Mvc\Model
{
	protected $date;
	protected $title;
	protected $text;
	
	public function getDate($format=true)
	{
		if ($format)
			return date('F d, Y', strtotime($this->date));
		return $this->date;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function getText()
	{
		return $this->text;
	}
  
  public function setDate($d)
  {
    $this->date = $d;
  }
	
	public function setTitle($t)
	{
		$this->title = $t;
	}
	
	public function setText($t)
	{
		$this->text = $t;
	}
}


?>
