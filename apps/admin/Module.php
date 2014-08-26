<?php


namespace Giada\Admin;


class Module implements \Phalcon\Mvc\ModuleDefinitionInterface
{
	/* register a specific autoloader for the module */
	
	public function registerAutoloaders()
	{
		$loader = new \Phalcon\Loader();
		$loader->registerNamespaces(
			array(
				'Giada\Admin\Controllers' => '../apps/admin/controllers/',
				'Giada\Models'            => '../common/models/',
			)
		);
		$loader->register();
	}

	/* register specific services for the module */
	public function registerServices($di)
	{
		/* registering a dispatcher */
		
		$di->set('dispatcher', function()
		{
			$dispatcher = new \Phalcon\Mvc\Dispatcher();
			$dispatcher->setDefaultNamespace('Giada\Admin\Controllers');
			return $dispatcher;
		});

		/* registering the view component */
		
		$di->set('view', function()
		{
			$view = new \Phalcon\Mvc\View();
			$view->setViewsDir('../apps/admin/views/');
			$view->registerEngines(array(
				'.phtml' => 'Phalcon\Mvc\View\Engine\Volt'
			));
			return $view;
		});
	}

}

?>
