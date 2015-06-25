<?php


namespace Giada\Frontend\Controllers;


class NewsArchiveController extends BaseController
{
	public function indexAction()
	{
		if (!$this->view->getCache()->exists('news-archive-cache'))
		{
			$news = \Giada\Models\News::find(array(
				'order' => 'date DESC'
			));
			$this->view->news = $news;
		}
		$this->view->cache(array('key' => 'news-archive-cache'));
	}
}


?>
