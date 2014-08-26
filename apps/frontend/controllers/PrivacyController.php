<?php


namespace Giada\Frontend\Controllers;


class PrivacyController extends BaseController
{
	public function indexAction()
	{
		$this->prependMeta('meta_title', 'Privacy - ');
		$this->appendMeta('meta_description', ', privacy');
		$this->appendMeta('meta_keywords', ', privacy');
	}
}


?>
