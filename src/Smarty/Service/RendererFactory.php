<?php
namespace Smarty\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Smarty\View\Renderer;

class RendererFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $locator)
	{
		$config = $locator->get('Configuration');
		$config = $config['smarty'];

		/** @var $pathResolver \Zend\View\Resolver\TemplatePathStack */
		$pathResolver = clone $locator->get('ViewTemplatePathStack');
		$pathResolver->setDefaultSuffix($config['suffix']);

		/** @var $resolver \Zend\View\Resolver\AggregateResolver */
        $resolver = $locator->get('ViewResolver');
        $resolver->attach($pathResolver, 2);

		$engine = new \Smarty();
		$engine->setCompileDir($config['compile_dir']);

		$renderer = new Renderer();
		$renderer->setEngine($engine);
		$renderer->setSuffix(($config['suffix']) ? $config['suffix'] : 'tpl');
		$renderer->setResolver($resolver);

		return $renderer;
	}

}