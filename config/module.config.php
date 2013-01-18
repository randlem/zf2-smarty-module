<?php
/**
 * @link
 * @license
 * @package Smarty
 */


$dataDir = __DIR__ . '/../../../../data';
if (!is_dir($dataDir)) {
    $dataDir = __DIR__ . '/../../../data';
}

return array(
    'view_manager' => array(
        'strategies' => array(
            'Smarty\View\Strategy'
        ),
    ),

    'service_manager' => array(
        'factories' => array(
            'Smarty\View\Strategy' => 'Smarty\Service\StrategyFactory',
			'Smarty\View\Renderer' => 'Smarty\Service\RendererFactory',
        ),
    ),

	'smarty' => array(
		'suffix'       => 'tpl',
		'suffixLocked' => TRUE,
		'compile_dir'  => $dataDir . '/smarty/compiled',
	),
);