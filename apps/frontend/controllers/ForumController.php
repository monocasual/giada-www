<?php


namespace Giada\Frontend\Controllers;


class ForumController extends BaseController
{	
	public function indexAction()
	{
		$this->response->redirect('phpbb-forum');
	}
}


?>
