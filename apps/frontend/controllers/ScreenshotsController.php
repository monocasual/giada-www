<?php


namespace Giada\Frontend\Controllers;


class ScreenshotsController extends BaseController
{
	public function indexAction()
	{
		$this->prependMeta('meta_title', 'Screenshots - ');
		$this->appendMeta('meta_description', ', screenshots');
		$this->appendMeta('meta_keywords', ', screenshots');
	}
}

?>
