<?php
namespace Vdevpro\Modules\Zendvn\Controllers\Jquery ;
use Vdevpro\Modules\Zendvn\Controllers\Zendvn;
class PluginController extends Zendvn
{
    public function zoomAction() { 
        $records = $this->db->fetchAll("SELECT * FROM cities");
        $this->tag->setTitle('Jquery Plugin Zoom');
        $this->view->title  = 'Jquery Plugin Zoom' ;
        $this->view->pick('jquery/plugin/zoom') ;
    }
    
    public function sliderAction() {
        $this->tag->setTitle('Jquery Plugin Slider');
        $this->view->title  = 'Jquery Plugin Slider' ;
        $this->view->pick('jquery/plugin/slider') ;
    }

}

