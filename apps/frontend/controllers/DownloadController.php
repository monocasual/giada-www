<?php


namespace Giada\Frontend\Controllers;


class DownloadController extends BaseController
{	
	public function indexAction()
	{
		$this->prependMeta('meta_title', 'Download - ');
		$this->appendMeta('meta_description', ', download');
		$this->appendMeta('meta_keywords', ', download');
	}
	
	public function grabAction($os, $version=NULL)
	{
		$this->view->disable();
		
		/* if 'version' != NULL an old version is being requested */
		
		if (!$version)
			$version = $this->config->changelog->version;
		
		$filepath = '';
			
		/* input parsing */

		if ($os == 'windows-32')
			$filepath = 'giada-'.$version.'-win-i386.zip';
		else
		if ($os == 'linux-32')
			$filepath = 'giada-'.$version.'-lin-i386.tar.gz';
		else
		if ($os == 'linux-64')
			$filepath = 'giada-'.$version.'-lin-amd64.tar.gz';
		else
		if ($os == 'osx-32')
			$filepath = 'giada-'.$version.'-osx-i386.zip';
		else
		if ($os == 'source')
			$filepath = 'giada-'.$version.'-src.tar.gz';
		else
		if ($os == 'linux-binary-32')
			$filepath = 'giada-'.$version.'-linbin-i386.tar.gz';
		else
		if ($os == 'linux-binary-64')
			$filepath = 'giada-'.$version.'-linbin-amd64.tar.gz';
		else
		if ($os == 'windows-old')
			$filepath = 'giada-'.$version.'-win.zip';
		else
		if ($os == 'osx-old')
			$filepath = 'giada-'.$version.'-osx.zip';
		else
		if ($os == 'linux-binary-old')
			$filepath = 'giada-'.$version.'-linbin.tar.gz';
		else
		if ($os == 'linux-old')
			$filepath = 'giada-'.$version.'-lin.tar.gz';
		else
		{
			$this->logger->error('[DownloadController::grabAction] wrong version chosen! was $filepath='.$filepath.', $os='.$os);
			$this->response->redirect('404');
		}
		
		/* update download stats, only if not in debug mode */

		if (!$this->config->mode->debug)
		{
			$stats = \Giada\Models\Stats::findFirst('version="'.$os.'"');
			$stats->increment();
			if (!$stats->save())
			{
				$this->logger->error('[DownloadController::grabAction] unable to increment stats!');
				foreach ($stats->getMessages() as $m)
					$this->logger->error('[DownloadController::grabAction] ... '.$m);
			}
		}
		
		$filepath = '../data/dist/' . $filepath;
		if (!file_exists($filepath))
			$this->logger->error('[DownloadController::grabAction] file "'.$filepath.'" not found!');	
		if (!is_readable($filepath))
			$this->logger->error('[DownloadController::grabAction] file "'.$filepath.'" is unreadable!');	
		
		/* prepare header */

		$this->response->setHeader('Content-Type', 'application/x-gzip');
		$this->response->setHeader('Content-Transfer-Encoding', 'binary');
		$this->response->setHeader('Content-Disposition', 'attachment; filename="'.basename($filepath).'"');
		$this->response->setHeader('Content-Length', filesize($filepath));
		readfile($filepath);
	}
}

?>
