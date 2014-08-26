<?php


namespace Giada\Frontend\Controllers;


class TosController extends BaseController
{
	public function indexAction()
	{
		$this->prependMeta('meta_title', 'Terms of Service - ');
		$this->appendMeta('meta_description', ', terms of service');
		$this->appendMeta('meta_keywords', ', terms of service');
	}
}


?>
