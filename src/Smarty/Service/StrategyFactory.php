<?php
namespace Smarty\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Smarty\View\Strategy;

class StrategyFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $locator)
	{
		$renderer = $locator->get('Smarty\View\Renderer');
		$strategy = new Strategy($renderer);
		return $strategy;
	}

}
