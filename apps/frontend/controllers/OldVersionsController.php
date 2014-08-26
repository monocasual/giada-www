<?php


namespace Giada\Frontend\Controllers;


class OldVersionsController extends BaseController
{	
	public function indexAction()
	{
		$this->prependMeta('meta_title', 'Old versions - ');
		$this->appendMeta('meta_description', ', old versions');
		$this->appendMeta('meta_keywords', ', old versions');
		
		$output = array();
		$files  = array_reverse(glob('../data/dist/*'));
		
		foreach ($files as $f)
		{
			$fname   = basename($f);
			$date    = date('F d, Y', filemtime($f));
			$os      = '';
			$dl      = '';
			$version = array();

			if (preg_match('/^giada-([0-9.]+)-src.tar.gz$/', $fname, $version))
			{
				$os = 'Source';
				$dl = 'source';
			}
			else 
			{
				preg_match('/^giada-([0-9.]+)-(.*?)$/', $fname, $version);

				/* old filenames */

				if ($version[2] == 'win.zip') 
				{
					$os = 'Windows';
					$dl = 'windows-old';
				}
				else
				if ($version[2] == 'osx.zip') 
				{
					$os = 'OS X';
					$dl = 'osx-old';
				}
				else
				if ($version[2] == 'linbin.tar.gz') 
				{
					$os = 'Linux (32 bit binaries)';
					$dl = 'linux-binary-old';
				}
				else
				if ($version[2] == 'lin.tar.gz') 
				{
					$os = 'Linux (32 bit .deb)';
					$dl = 'linux-old';
				}

				/* new filenames */

				if ($version[2] == 'win-i386.zip') 
				{
					$os = 'Windows';
					$dl = 'windows-32';
				}
				else
				if ($version[2] == 'osx-i386.zip') 
				{
					$os = 'OS X';
					$dl = 'osx-32';
				}
				else
				if ($version[2] == 'linbin-i386.tar.gz') 
				{
					$os = 'Linux (32 bit binaries)';
					$dl = 'linux-binary-32';
				}
				else
				if ($version[2] == 'linbin-amd64.tar.gz') 
				{
					$os = 'Linux (64 bit binaries)';
					$dl = 'linux-binary-64';
				}
				else
				if ($version[2] == 'lin-i386.tar.gz') 
				{
					$os = 'Linux (32 bit .deb)';
					$dl = 'linux-32';
				}
				else
				if ($version[2] == 'lin-amd64.tar.gz') 
				{
					$os = 'Linux (64 bit .deb)';
					$dl = 'linux-64';
				}
			}
			
			$output[] = array(
				'fname'   => $fname,
				'date'    => $date,
				'os'      => $os,
				'dl'      => $dl,
				'version' => $version[1]
			);
		}
		$this->view->files = $output;
	}
}


?>
