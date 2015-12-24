<?php

 /* consts */

define('G_PROFILE', 'prod');


/* create a DI */

$di = new Phalcon\DI\FactoryDefault();


/* setup global config */

$di->setShared('config', new \Phalcon\Config\Adapter\Ini('../common/config/' . G_PROFILE . '.ini'));


/* specify routes for modules */

$di->set('router', function()
{
	$router = new Phalcon\Mvc\Router();

	$router->setDefaultModule('frontend');

	$router->add('/api', array(
			'module'     => 'api',
			'controller' => 'index'
	));

	$router->add('/api/:controller/:action', array(
			'module'     => 'api',
			'controller' => 1,
			'action'     => 2
	));
	return $router;
});


/* setup a base URI so that all generated URIs include the 'giada'
 * folder */

$di->set('url', function()
{
		$url = new \Phalcon\Mvc\Url();
		$url->setBaseUri(Phalcon\DI::getDefault()->get('config')->urls->base_uri);
		return $url;
});


/* setup the database service */

$di->set('db', function()
{
	return new \Phalcon\Db\Adapter\Pdo\Sqlite(array(
		'dbname' => '../data/db/giada.sqlite'
	));
});


/* setup internal logger */

$di->set('logger', function()
{
	$l = new \Phalcon\Logger\Adapter\File('../var/logs/output.log');
	$l->setLogLevel(\Phalcon\Logger::INFO);
	return $l;
});


/* set the views cache service */

$di->set('viewCache', function()
{
	/* set default cache life time to 1 day */

	$frontCache = new Phalcon\Cache\Frontend\Output(array(
		'lifetime' => 86400
	));

	/* file backend settings */

	$cache = new Phalcon\Cache\Backend\File($frontCache, array(
		'cacheDir' => '../data/cache/'
	));

	return $cache;
});


/* setup session service */

$di->setShared('session', function()
{
	$session = new Phalcon\Session\Adapter\Files();
	$session->start();
	return $session;
});


/* load and register namespaces */

$loader = new \Phalcon\Loader();

$loader->registerNamespaces(array(
  'Giada\Common\Services' => '../common/services'
));
$loader->register();


/* inject jsonService as a shared (i.e. a singleton) service. */

$di->setShared('jsonService', function()
{
  return new \Giada\Common\Services\JsonService();
});


try
{
	/* create an application */

	$application = new Phalcon\Mvc\Application($di);

	/* register the installed modules, i.e. instruct Phalcon that we have
	 * twoo different modules: Frontend, and Api */

	$application->registerModules(
		array(
			'frontend' => array(
				'className' => 'Giada\Frontend\Module',
				'path'      => '../apps/frontend/Module.php',
			),
			'api'  => array(
				'className' => 'Giada\Api\Module',
				'path'      => '../apps/api/Module.php',
			)
		)
	);

  /* handle the request */

  echo $application->handle()->getContent();

}
catch(\Exception $e)
{
	$di->get('logger')->error('[BASE] ' . $e->getMessage());
	$di->get('logger')->error('[BASE] ' . $e->getTraceAsString());
}


?>
