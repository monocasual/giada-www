<?php


namespace Giada\Frontend;


class Module implements \Phalcon\Mvc\ModuleDefinitionInterface
{
	/* register a specific autoloader for the module */
	
	public function registerAutoloaders(\Phalcon\DiInterface $di=null)
	{
		$loader = new \Phalcon\Loader();
		$loader->registerNamespaces(
			array(
				'Giada\Frontend\Controllers' => '../apps/frontend/controllers/',
				'Giada\Models'               => '../common/models/',
			)
		);
		$loader->register();
	}

	/* register specific services for the module */

	public function registerServices(\Phalcon\DiInterface $di=null)
	{
		/* register a dispatcher, with custom action when an exception
		 * occurs */

		$di->set('dispatcher', function()
		{
			$eventsManager = new \Phalcon\Events\Manager();
			$eventsManager->attach('dispatch:beforeException', function($event, $dispatcher, $exception) 
			{
				switch ($exception->getCode()) 
				{
					case \Phalcon\Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
					case \Phalcon\Dispatcher::EXCEPTION_ACTION_NOT_FOUND:
						$dispatcher->forward(array(
							'module'     => 'frontend',
							'controller' => 'index',
							'action'     => 'show404'
						));
						return false;
				}
			});
			$dispatcher = new \Phalcon\Mvc\Dispatcher();
			$dispatcher->setEventsManager($eventsManager);
			$dispatcher->setDefaultNamespace('Giada\Frontend\Controllers');
			return $dispatcher;
		});

		// registering the view component
		
		$di->set('view', function()
		{
			$view = new \Phalcon\Mvc\View();
			$view->setViewsDir('../apps/frontend/views/');
			$view->registerEngines(array(
				'.phtml' => 'Phalcon\Mvc\View\Engine\Volt'
			));
			return $view;
		});

	}
}


?>
