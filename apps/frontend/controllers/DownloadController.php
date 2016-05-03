<?php


namespace Giada\Frontend\Controllers;


class DownloadController extends BaseController
{
	private function updateStats($os)
	{
		$stats = \Giada\Models\Stats::findFirst('version="'.$os.'"');
		if (!$stats)
		{
			$this->logger->error('[DownloadController::updateStats] stats not found for os='.$os);
			return;
		}
		$stats->increment();
		if (!$stats->save())
		{
			$this->logger->error('[DownloadController::updateStats] unable to increment stats!');
			foreach ($stats->getMessages() as $m)
				$this->logger->error('[DownloadController::updateStats] ... '.$m);
		}
	}

	private function getPath($platform)
	{
		$base = '../data/dist';
		$version = $this->config->changelog->version;
		return sprintf('%s/giada-%s-%s', $base, $version, $platform);
	}

	private function flush($filepath)
	{
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

	public function indexAction()
	{
		$this->view->md5win32 = md5_file($this->getPath('win-i386.zip'));
		$this->view->md5lin32 = md5_file($this->getPath('lin-i386.tar.gz'));
		$this->view->md5lin64 = md5_file($this->getPath('lin-amd64.tar.gz'));
		$this->view->md5osx64 = md5_file($this->getPath('osx-amd64.zip'));
		$this->view->md5src   = md5_file($this->getPath('src.tar.gz'));
	}

	public function grabAction($os, $version=NULL)
	{
		$this->view->disable();

		$filepath = '';

		switch($os)
		{
			case 'windows-32':
				$filepath = $this->getPath('win-i386.zip');
				break;
			case 'linux-32':
				$filepath = $this->getPath('lin-i386.tar.gz');
				break;
			case 'linux-64':
				$filepath = $this->getPath('lin-amd64.tar.gz');
				break;
			case 'osx-64':
				$filepath = $this->getPath('osx-amd64.zip');
				break;
			case 'source':
				$filepath = $this->getPath('src.tar.gz');
				break;
			default:
				$this->logger->error('[DownloadController::grabAction] wrong version chosen! was $os='.$os);
				$this->response->redirect('404');
		}

		if (!$this->config->mode->debug)
			$this->updateStats($os);

		$this->flush($filepath);
	}
}

?>
