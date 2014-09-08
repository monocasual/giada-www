<?php


namespace Giada\Api\Controllers;


class IndexController extends BaseController
{	
	/**/
	
	public function indexAction()
	{
		$this->response->redirect('api/auth');
	}
}

?>
