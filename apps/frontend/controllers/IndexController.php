<?php


namespace Giada\Frontend\Controllers;


class IndexController extends BaseController
{
	public function initialize()
	{
		parent::initialize();
		$this->assets->addJs('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', true);
		$this->assets->addJs('public/js/vendor/jquery.githubRepoWidget.min.js');
		$this->assets->addJs('http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/transition.min.js', true);
		$this->assets->addJs('http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/carousel.min.js', true);
	}
	
	public function indexAction()
	{
		if (!$this->view->getCache()->exists('index-cache'))
		{
			$news = \Giada\Models\News::find(array(
				'order' => 'date DESC',
				'limit' => 4
			));
			$this->view->news = $news;		
		}
		$this->view->cache(array('key' => 'index-cache'));
	}
	
	public function show404Action()
	{
		$this->view->cache(true);
		$this->prependMeta('meta_title', 'Page not found - ');
		$this->appendMeta('meta_description', ', page not found');
		$this->appendMeta('meta_keywords', ', page not found');
		$this->response->setStatusCode(404, 'Not Found');
	}
}

?>
