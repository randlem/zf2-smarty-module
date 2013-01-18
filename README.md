## Summery

This module facilitates Smarty integration with ZF2 MVC applications.  The current version does not support template inheretence or partial loading.  Other Smarty features are currently supported.

## Requirements

* Zend Framework 2 (https://github.comf/zendframework/zf2)
* Smarty (http://www.smarty.net/)

## Installation

### Composer Installation

1. Navigate to project directory
2. Add the following content to your `composer.json` file:

```json
{
    "require": {
	    "randlem/zf2-smarty-module": "dev-master"
	}
}
```
3. Run `php composer.phar install`
4. Open your ZF2 project's application.config.php and add 'Smarty' to your 'modules' parameter.

## How to add Smarty rendering to ZF2

Add or append to your Application module config file (module.config.php) the new rendering strategy:

```php
<?php
return array(
	'view_manager' => array(
		'strategies' => array(
			'Smarty\View\Strategy'
		),
	),
);
```
