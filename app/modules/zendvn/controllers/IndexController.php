<?php
namespace Vdevpro\Modules\Zendvn\Controllers;
use Vdevpro\Common\Controllers\ControllerBase;

class IndexController extends ControllerBase
{
    public function indexAction() {
        echo '<pre>';
        print_r($_SERVER);
        echo '</pre>';
        return false;
    }
    
}

