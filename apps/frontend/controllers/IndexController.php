<?php


namespace Giada\Frontend\Controllers;


class IndexController extends BaseController
{
	private function countFacebookShares()
	{
		$this->json->init('http://graph.facebook.com/?id=' . $this->config->urls->base);
		$res = $this->json->get(true);
		if (array_key_exists('share', $res)) {
			return (int) $res['share']['share_count'];
		}
		else {
			$this->logger->error('[IndexController::countFacebookShares] invalid API data!');
			$this->logger->error('[IndexController::countFacebookShares] ' . print_r($res, true));
			return 0;
		}
	}


	private function countRedditShares()
	{
		$this->json->init('https://www.reddit.com/api/info.json?url=' . $this->config->urls->base);
		$res = $this->json->get(true);
		if (array_key_exists('data', $res)) {
			$score = 0;
			foreach($res['data']['children'] as $child)
				$score += (int) $child['data']['score'];
			return $score;
		}
		else {
			$this->logger->error('[IndexController::countRedditShares] invalid API data!');
			$this->logger->error('[IndexController::countRedditShares] ' . print_r($res, true));
			return 0;
		}
	}


	private function countFlattrShares()
	{
		$this->json->init('https://api.flattr.com/rest/v2/things/' . $this->config->services->flattr_id . '/flattrs');
		$res = $this->json->get(true);
		if (is_array($res)) {  // APIs return an array
			return (int) $res[0]['thing']['flattrs'];
		}
		else {
			$this->logger->error('[IndexController::countFlattrShares] invalid API data!');
			return 0;
		}
	}


	private function countGithubShares()
	{
		/* sort by number of stars, desc, so Giada App will be always the first
		 * (unless giada-www or giada-midimaps will beat it, which is unlikely) */

		$this->json->init('https://api.github.com/search/repositories?q=giada+user:monocasual&sort=stars&order=desc');
		$res = $this->json->get(true);
		if (array_key_exists('items', $res)) {
			return (int) $res['items'][0]['stargazers_count'];
		}
		else {
			$this->logger->error('[IndexController::countGithubShares] invalid API data!');
			return 0;
		}
	}


	public function onConstruct()
	{
		$this->json = \Phalcon\DI::getDefault()->getShared('jsonService');
	}


	public function indexAction()
	{
		$cacheKey = 'index';
		if (!$this->view->getCache()->exists($cacheKey))
		{
			$news = \Giada\Models\News::find(array(
				'order' => 'date DESC',
				'limit' => 5
			));

			$socialStats = array();
			$socialStats['facebook'] = $this->countFacebookShares();
			$socialStats['reddit'] = $this->countRedditShares();
			$socialStats['flattr'] = $this->countFlattrShares();
			$socialStats['github'] = $this->countGithubShares();
			$socialStats['google'] = 140; // !!!

			$this->view->setVar('news', $news);
			$this->view->setVar('socialStats', $socialStats);
		}
		$this->view->cache(array('key' => $cacheKey));
	}

	public function show404Action()
	{
		$this->view->cache(true);
		$this->response->setStatusCode(404, 'Not Found');
	}
}

?>
