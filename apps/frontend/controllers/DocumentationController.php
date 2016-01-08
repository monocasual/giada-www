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
		try {
			$this->view->partial('partials/docs/'.$page);
		}
		catch(\Exception $e)
		{
			$this->logger->error('[DocumentationController::index] unable to find page "'.$page.'"');
			$this->response->redirect('show404');
		}
		$this->view->setVar('title', str_replace('-', ' ', ucfirst($page)));
		$this->view->setVar('page', $page);
	}
}


?>
