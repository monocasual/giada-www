<?php


namespace Giada\Frontend\Controllers;


class FeaturesController extends BaseController
{	
	public function indexAction()
	{
		$this->prependMeta('meta_title', 'Features - ');
		$this->appendMeta('meta_description', ', features');
		$this->appendMeta('meta_keywords', ', features');
	}
}


?>
