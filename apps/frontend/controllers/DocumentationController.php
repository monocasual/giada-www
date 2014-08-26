<?php


namespace Giada\Frontend\Controllers;


class DocumentationController extends BaseController
{	
	public function indexAction()
	{
		$this->prependMeta('meta_title', 'Docs - ');
		$this->appendMeta('meta_description', ', documentation');
		$this->appendMeta('meta_keywords', ', documentation');
		$this->view->partial('partials/docs/documentation-index');
	}
	
	public function showAction($page)
	{
		$pageTitle = str_replace('-', ' ', ucfirst($page));
		$this->prependMeta('meta_title', $pageTitle.' - ');
		$this->appendMeta('meta_description', ', documentation, '.$pageTitle);
		$this->appendMeta('meta_keywords', ', documentation, '.$pageTitle);
		$this->view->partial('partials/docs/documentation-'.$page);
	}
}


?>
