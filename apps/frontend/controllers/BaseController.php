<?php


namespace Giada\Frontend\Controllers;


class BaseController extends \Phalcon\Mvc\Controller
{
	public function initialize()
	{
		$this->view->setVars(array(
			'meta_title'       => $this->config->metas->title,
			'meta_description' => $this->config->metas->description,
			'meta_keywords'    => $this->config->metas->keywords,
		));
	}
}

?>
