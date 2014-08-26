<?php


namespace Giada\Api\Controllers;


class NewsController extends BaseController
{	
	/**/
	
	public function indexAction()
	{
	}
	
	/**/
	
	public function getAction()
	{
		$this->checkAuth();

		if ($this->status)
		{
			$id     = $this->request->getPost('id');
			$limit  = $this->request->getPost('limit');
			$offset = $this->request->getPost('offset');
			
			$limit  = $limit  != NULL ? $limit : 5;
			$offset = $offset != NULL ? $offset : 1;
	
			if ($id)
				$news = \Giada\Models\News::find($id);
			else
				$news = \Giada\Models\News::find(
					array(
						'order' => 'date DESC',
						'limit' => array(
							'number' => $limit, 
							'offset' => $offset
						)
					)
				);

			foreach ($news as $n)
				$this->output['data'][] = array(
					'id'    => $n->id,
					'date'  => $n->getDate(false),  // no format
					'title' => $n->getTitle(),
					'text'  => $n->getText()
				);
		}
		return $this->flush();
	}

	/**/

	public function insertAction()
	{
		$this->checkAuth();

		if ($this->status)
		{
			$title = $this->request->getPost('title');
			$text  = $this->request->getPost('text');

			if ($title == NULL)
				$this->setOutput(0, 'missing title', '', false, 400, 'Bad request');
			else
			if ($text == NULL)
				$this->setOutput(0, 'missing text', '', false, 400, 'Bad request');
			else
			{
				$news = new \Giada\Models\News();
				$news->title = $title;
				$news->text  = $text;
				$news->date  = date('Y-m-d H:i:s');
				if ($news->create() == false)
				{
					$msg = join(', ', $news->getMessages()); 
					$this->setOutput(0, 'insert error: '.$msg, '', false, 400, 'Bad request');
				}
				else
					$this->setOutput(1, '');
			}
		}
		return $this->flush();
	}

	/**/

	public function updateAction()
	{
		$this->checkAuth();
		
		$id    = $this->request->getPost('id');
		$title = $this->request->getPost('title');
		$text  = $this->request->getPost('text');
		
		if ($id == NULL)
			$this->setOutput(0, 'missing id', '', false, 400, 'Bad request');
		else
		if ($title == NULL)
			$this->setOutput(0, 'missing title', '', false, 400, 'Bad request');
		else
		if ($text == NULL)
			$this->setOutput(0, 'missing text', '', false, 400, 'Bad request');
		else
		{
			$news = \Giada\Models\News::findFirst($id);
			$news->setTitle($title);
			$news->setText($text);
			if ($news->save() == false)
			{
				$msg = join(', ', $news->getMessages()); 
				$this->setOutput(0, 'update error: '.$msg, '', false, 400, 'Bad request');
			}
			else
				$this->setOutput(1, '');
		}

		return $this->flush();		
	}
	
	/**/
	
	public function deleteAction()
	{
		$this->checkAuth();
		
		$id = $this->request->getPost('id');
		
		if ($id == NULL)
			$this->setOutput(0, 'missing id', '', false, 400, 'Bad request');
		else
		{
			$news = \Giada\Models\News::findFirst($id);
			$news->delete();
			$this->setOutput(1, '');
		}
		
		return $this->flush();
	}
}

?>
