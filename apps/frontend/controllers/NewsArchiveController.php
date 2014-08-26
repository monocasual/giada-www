<?php


namespace Giada\Frontend\Controllers;


class NewsArchiveController extends BaseController
{	
	public function indexAction()
	{
		$this->prependMeta('meta_title', 'News archive - ');
		$this->appendMeta('meta_description', ', news archive');
		$this->appendMeta('meta_keywords', ', news archive');
		
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
