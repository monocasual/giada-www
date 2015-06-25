<?php


namespace Giada\Frontend\Controllers;


class IndexController extends BaseController
{
	public function initialize()
	{
	}

	public function indexAction()
	{
		$cacheKey = 'index';
		if (!$this->view->getCache()->exists($cacheKey))
		{
			$news = \Giada\Models\News::find(array(
				'order' => 'date DESC',
				'limit' => 4
			));
			$this->view->news = $news;
		}
		$this->view->cache(array('key' => $cacheKey));
	}

	public function show404Action()
	{
		$this->view->cache(true);
		$this->response->setStatusCode(404, 'Not Found');
	}
}

?>
