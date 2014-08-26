<?php


namespace Giada\Frontend\Controllers;


class SourceController extends BaseController
{
	
	private $token = 'a97c99cd5b97f6d4675f84e5c72efbd94b909eff:x-oauth-basic';
	private $jsonService;
	
	/* ---------------------------------------------------------------- */
	
	private function getCommits($file) {
		$this->jsonService->init('https://api.github.com/repos/monocasual/giada/commits?path='.$file, $this->token);
		$data = $this->jsonService->get(true);
		return $data;
	}

	/* ---------------------------------------------------------------- */

	private function getSource($file) {
		$this->jsonService->init('https://api.github.com/repos/monocasual/giada/contents/'.$file, $this->token);
		$data = $this->jsonService->get(true);
		if (!array_key_exists('message', $data))
			return $data;
		return 0;
	}

	/* ---------------------------------------------------------------- */

	private function getDir($dir) {
		$this->jsonService->init('https://api.github.com/repos/monocasual/giada/contents/'.$dir, $this->token);
		$data = $this->jsonService->get(true);
		if (!array_key_exists('message', $data))
			return $data;
		return 0;
	}
	
	/* ---------------------------------------------------------------- */
	
	public function initialize()
	{
		parent::initialize();
		$this->jsonService = $this->di->getShared('jsonService');
	}
	
	/* ---------------------------------------------------------------- */
	
	public function indexAction()
	{
		$this->prependMeta('meta_title', 'Source - ');
		$this->appendMeta('meta_description', ', source');
		$this->appendMeta('meta_keywords', ', source');

		if (!$this->view->getCache()->exists('source-index-cache'))
			$this->view->dir = $this->getDir('src');
		$this->view->cache(array('key' => 'source-index-cache'));
	}
	
	/* ---------------------------------------------------------------- */
	
	public function showAction($file)
	{
		$this->view->cache(true);
		$this->prependMeta('meta_title', $file.' - Source - ');
		$this->appendMeta('meta_description', ', source, '.$file);
		$this->appendMeta('meta_keywords', ', source, '.$file);
		
		$key = 'source-show-'.$file.'-cache';
		if (!$this->view->getCache()->exists($key))	
		{
			$source = $this->getSource('src/'.$file);
			$this->view->file     = $file;
			$this->view->size     = number_format($source['size']);
			$this->view->html_url = $source['html_url'];
			$this->view->content  = htmlentities(base64_decode($source['content']));
			$this->view->commits  = $this->getCommits('src/'.$file);
		}
		$this->view->cache(array('key' => $key));
	}
}


?>
