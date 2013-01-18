<?php
namespace Smarty;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{

	public function getAutoloaderConfig()
	{
		return array(
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
					__NAMESPACE__ => __DIR__ . '/src/'. __NAMESPACE__,
				),
			),
		);
	}

	public function getConfig()
	{
		return include_once __DIR__ . '/config/module.config.php';
	}

}
