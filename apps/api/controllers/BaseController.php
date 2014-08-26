<?php


namespace Giada\Api\Controllers;


class BaseController extends \Phalcon\Mvc\Controller
{
	/* output
	 * JSON response. */
	 
	protected $output;
	
	/* status
	 * API status. */
	 
	protected $status;
	
	/**/
	
	protected $responseStatus;
	protected $responseMessage;
	
	/* setOutput */
	
	protected function setOutput($result, $message, $data='', $status=true, $resStatus=200, $resMessage='OK')
	{
		$this->status = $status;
		$this->output['result']  = $result;
		$this->output['message'] = $message;
		$this->output['data']    = $data;
		$this->responseStatus    = $resStatus;
		$this->responseMessage   = $resMessage;
	}
	
	/* checkAuth
	 * check if access token is set and with correct value. */
	 
	protected function checkAuth()
	{
		$accessToken = $this->request->getPost('access_token');
		
		if ($accessToken == NULL)
			$this->setOutput(0, 'missing access token', '', false, 403, 'forbidden');
		else
		if ($accessToken != $this->session->get('access_token'))
			$this->setOutput(0, 'wrong access token', '', false, 403, 'forbidden');
		else
		if (time() - $this->session->get('access_time') > $this->config->api->expire_time)
			$this->setOutput(0, 'session expired', '', false, 403, 'forbidden');
		else  // if ok, update access_time to now
			$this->session->set('access_time', time());
	}
	
	/* flush
	 * output the final json. */
	
	protected function flush()
	{
		$this->response->setStatusCode($this->responseStatus, $this->responseMessage);
		$this->response->setJsonContent($this->output);
		return $this->response;
	}
	
	/**/
	
	public function initialize()
	{
		$this->status = true;
		
		$this->output = array(
			'result'  => 1,
			'message' => '',
			'data'    => '');
		
		$this->responseStatus  = 200;
		$this->responseMessage = 'OK';	
		
		$this->view->disable(); // no rendering view for REST api
		$this->response->setContentType('application/json', 'UTF-8');
	}
}

?>
