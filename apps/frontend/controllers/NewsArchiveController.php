<?php


namespace Giada\Frontend\Controllers;


class NewsArchiveController extends BaseController
{
	public function indexAction()
	{
		$cacheKey = 'news-archive';
		if (!$this->view->getCache()->exists($cacheKey))
		{
			$news = \Giada\Models\News::find(array(
				'order' => 'date DESC'
			));
			$this->view->news = $news;
		}
		$this->view->cache(array('key' => $cacheKey));
	}
}


?>
