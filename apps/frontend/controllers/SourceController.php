<?php


namespace Giada\Frontend\Controllers;


class SourceController extends BaseController
{

	private $jsonService;
	private $token = 'a97c99cd5b97f6d4675f84e5c72efbd94b909eff:x-oauth-basic';
	private $blacklist = array(
		'src/vst',
		'src/rtaudio-mod'
	);

	/* ------------------------------------------------------------------------ */

	private function getCommits($file)
	{
		$this->jsonService->init('https://api.github.com/repos/monocasual/giada/commits?path='.$file, $this->token);
		$data = $this->jsonService->get(true);
		return $data;
	}

	/* ------------------------------------------------------------------------ */

	private function getNode($n)
	{
		$this->jsonService->init('https://api.github.com/repos/monocasual/giada/contents/'.$n, $this->token);
		$data = $this->jsonService->get(true);
		if (!array_key_exists('message', $data))
			return $data;
		return 0;
	}

	/* ------------------------------------------------------------------------ */

	private function isFile($node)
	{
		// Keys of the array
    $keys = array_keys($node);

    // If the array keys of the keys match the keys, then the array must
    // not be associative (e.g. the keys array looked like {0:0, 1:1...}).
    return array_keys($keys) !== $keys;
	}

	/* ------------------------------------------------------------------------ */

	private function showFile($file)
	{
		$cacheKey = 'source-'.str_replace(array('.', '/'), '-', $file);

		if (!$this->view->getCache()->exists($cacheKey))
		{
			$this->view->setVar('file', $file);
			$source = $this->getNode($file);
			if ($source == 0)
				$this->response->redirect('show404');
			$this->view->setVar('type', 'file');
			$this->view->setVar('file', $file);
			$this->view->setVar('size', number_format($source['size']));
			$this->view->setVar('html_url', $source['html_url']);
			$this->view->setVar('content', htmlentities(base64_decode($source['content'])));
			$this->view->setVar('commits', $this->getCommits($file));
		}
		$this->view->cache(array('key' => $cacheKey));
	}

	/* ------------------------------------------------------------------------ */

	private function showDir($d)
	{
		$cacheKey = 'source-'.str_replace(array('.', '/'), '-', $d);
		if (!$this->view->getCache()->exists($cacheKey))
			$source = $this->getNode($d);
			if ($source == 0)
				$this->response->redirect('show404');
			$this->view->setVar('type', 'dir');
			$this->view->setVar('blacklist', $this->blacklist);
			$this->view->setVar('path', $d);
			$this->view->setVar('dir', $source);
		$this->view->cache(array('key' => $cacheKey));
	}

	/* ------------------------------------------------------------------------ */

	public function initialize()
	{
		$this->jsonService = $this->di->getShared('jsonService');
	}

	/* ------------------------------------------------------------------------ */

	public function indexAction()
	{
		$this->showDir('src');
	}

	/* ------------------------------------------------------------------------ */

	public function showAction($file)
	{
		$path = implode('/', $this->dispatcher->getParams());
		$node = $this->getNode($path);
		if ($this->isFile($node))
			$this->showFile($path);
		else
			$this->showDir($path);
	}
}


?>
