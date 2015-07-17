<?php


namespace Giada\Api;


class Module implements \Phalcon\Mvc\ModuleDefinitionInterface
{
	/* register a specific autoloader for the module */
	
	public function registerAutoloaders(\Phalcon\DiInterface $di=null)
	{
		$loader = new \Phalcon\Loader();
		$loader->registerNamespaces(
			array(
				'Giada\Api\Controllers' => '../apps/api/controllers/',
				'Giada\Models'          => '../common/models/',
			)
		);
		$loader->register();
	}

	/**
	 * Register specific services for the module
	 */
	public function registerServices(\Phalcon\DiInterface $di=null)
	{
		//Registering a dispatcher
		
		$di->set('dispatcher', function()
		{
			$dispatcher = new \Phalcon\Mvc\Dispatcher();
			$dispatcher->setDefaultNamespace('Giada\Api\Controllers');
			return $dispatcher;
		});

		//Registering the view component
		
		$di->set('view', function()
		{
			$view = new \Phalcon\Mvc\View();
			$view->setViewsDir('../apps/api/views/');
			$view->registerEngines(array(
				'.phtml' => 'Phalcon\Mvc\View\Engine\Volt'
			));
			return $view;
		});
	}

}

?>
