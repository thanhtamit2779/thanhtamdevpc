<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Vdevpro\Controllers' => APP_PATH . '/common/controllers/',
    'Vdevpro\Models' => APP_PATH . '/common/models/',
    'Vdevpro'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Vdevpro\Modules\Zendvn\Module' => APP_PATH . '/modules/Zendvn/Module.php',
    'Vdevpro\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();
