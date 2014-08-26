<?php


namespace Giada\Api\Controllers;


class AuthController extends BaseController
{	
	/**/
	
	public function indexAction()
	{
	}
	
	/**/
	
	public function loginAction()
	{
		$user = $this->request->getPost('username');
		$pass = $this->request->getPost('password');

		if ($user == NULL) 
			$this->setOutput(0, 'missing username', '', false, 403, 'forbidden');
		else
		if ($pass == NULL)
			$this->setOutput(0, 'missing password', '', false, 403, 'forbidden');
		else 
		{
			$u = \Giada\Models\User::findFirst(
				array(
					'username = :username: AND password = :password:', 
					'bind' => array(
						'username' => $user,
						'password' => md5($pass)
					)
				)
			);
			
			if ($u)
			{
				$ac = hash('sha256', rand());
				$at = time();
				$this->session->set('access_token', $ac);
				$this->session->set('access_time', $at);
				$data = array('access_token' => $ac, 'access_time' => $at);
				$this->setOutput(1, '', $data);
			}
			else
				$this->setOutput(0, 'user not found', '', false, 403, 'forbidden');
		}
			
		return $this->flush();
	}
	
	/**/
	
	public function logoutAction()
	{
		$this->session->destroy();
		$this->setOutput(1, '');
		return $this->flush();
	}
}

?>
