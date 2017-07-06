<?php
namespace Vdevpro\Modules\Zendvn\Controllers;
use Vdevpro\Common\Controllers\ControllerBase;

class Zendvn extends ControllerBase
{
    public function initialize() {
        $this->addCss()->addJs() ;
    }
    
    public function addCss() {
         $this->assets->addCss('public/templates/common/bootstrap/css/bootstrap.min.css')
                      ->addCss('public/templates/common/font-awesome/css/font-awesome.min.css')
                      ->addCss('public/templates/assets/css/style.css?v=' . time())                     ;
         return $this;        
     }
     
     public function addJs() {
         $this->assets->addJs('public/templates/assets/js/common.js')
                      ->addJs('public/templates/assets/js/particles.js')
                      ->addJs('public/templates/assets/js/particles.app.js');
         return $this ;
     }

    
}

