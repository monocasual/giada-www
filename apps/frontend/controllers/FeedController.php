<?php


namespace Giada\Frontend\Controllers;


class FeedController extends BaseController
{
	
	public function initialize()
	{
		$this->view->disable(); // no rendering view for rss feed
		$this->response->setContentType('application/rss+xml', 'UTF-8');
	}
	
	public function indexAction()
	{	
		$content = $this->viewCache->start('feed-cache');
		
		if (!$content) {
			$output = '
			<?xml version="1.0" encoding="utf-8" ?>
			<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
			<channel>
			<title>'.$this->config->metas->title.'</title>
			<link>'.$this->config->urls->base.'</link>
			<description>'.$this->config->metas->description.'</description>
			<language>en</language>
			<pubDate>'.date(DATE_RFC2822).'</pubDate>
			<lastBuildDate>'.date(DATE_RFC2822).'</lastBuildDate>
			<generator>Giada Robotronics Corporation</generator>
			<managingEditor>'.$this->config->urls->email.'</managingEditor>
			<webMaster>'.$this->config->urls->email.'</webMaster>'.PHP_EOL;
			
			$news = \Giada\Models\News::find(array(
				'order' => 'date DESC',
				'limit' => 10
			));		

			foreach ($news as $n) {
				$output .= '
				<item>
				<title>'.$n->getTitle().'</title>
				<link>'.$this->config->urls->base.'</link>
				<description>'.htmlentities(str_replace('\n', ' ', stripslashes($n->getText()))).'</description>
				<pubDate>'.date(DATE_RFC2822, strtotime($n->getDate(false))).'</pubDate></item>'.PHP_EOL;
			}
			
			$output .= '</channel></rss>';
		
			echo trim($output);
			$this->viewCache->save();
		}
		else {
			$this->response->setContent($content);
			return $this->response;
		}
	}
}

?>
