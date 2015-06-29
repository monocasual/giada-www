<?php


namespace Giada\Frontend\Controllers;


class DocumentationController extends BaseController
{
	public function indexAction()
	{
		$this->view->partial('partials/docs/index');
	}

	public function showAction($page)
	{
		$this->view->partial('partials/docs/'.$page);
		$this->view->setVar('title', str_replace('-', ' ', ucfirst($page)));
		$this->view->setVar('page', $page);
	}
}


?>
