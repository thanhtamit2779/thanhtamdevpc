<?php
namespace Vdevpro\Modules\Zendvn;

use Phalcon\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Php as PhpEngine;
use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{
    /**
     * Registers an autoloader related to the module
     *
     * @param DiInterface $di
     */
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces([
            'Vdevpro\Common\Controllers'                => APP_PATH . '/common/controllers/',
            'Vdevpro\Common\Models'                     => APP_PATH . '/common/models/',
            'Vdevpro\Modules\Zendvn\Controllers\Jquery' => __DIR__ . '/controllers/jquery/',
            'Vdevpro\Modules\Zendvn\Controllers'        => __DIR__ . '/controllers/',
            'Vdevpro\Modules\Zendvn\Models'             => __DIR__ . '/models/',
        ]);

        $loader->register();
    }

    /**
     * Registers services related to the module
     *
     * @param DiInterface $di
     */
    public function registerServices(DiInterface $di)
    {
        /**
         * Setting up the view component
         */
        $di->set('view', function () {
            $view = new View();
            $view->setDI($this);
            $view->setViewsDir(__DIR__ . '/views/');

            $view->registerEngines([
                '.volt'  => 'voltShared',
                '.phtml' => PhpEngine::class
            ]);

            return $view;
        });
    }
}
