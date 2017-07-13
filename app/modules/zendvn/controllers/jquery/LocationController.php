<?php
namespace Vdevpro\Modules\Zendvn\Controllers\Jquery ;
use Vdevpro\Modules\Zendvn\Controllers\Zendvn;
use Vdevpro\Modules\Zendvn\Models\Jquery\Cities as Cities;
class LocationController extends Zendvn
{
    public function homeAction() { 
        $this->assets->addCss('public/templates/common/select2/css/select2.min.css') ;
        $this->assets->collection('footer_js')->setPrefix($this->config->application->baseUri)->addJs('public/templates/common/select2/js/select2.min.js') ;      
        $this->tag->setTitle('Lấy giá trị theo tỉnh thành - quận huyện');
        $this->view->title  = 'Lấy giá trị theo tỉnh thành - quận huyện' ;
        $this->view->pick('jquery/location/home') ;
    }  
      
    public function getCitiesAction() {
        $result   = array();
        $query    = 'SELECT * FROM cities WHERE `status` = 1' ;
        $result   = $this->db->fetchAll($query) ;
        return $this->response_data_json($result) ;
    }
    
    public function getDistrictsAction() {
        $city_id    = $this->request->getPost('city_id', 'int') ;
        $type       = $this->request->getPost('type', 'string') ;
        
        $phq        = "SELECT * FROM districts WHERE `status` = 1" ;
        if($type === '*') $phq .= ' AND `id` > 0' ; 
        $phq        .= ' AND `city_id` = ' . $city_id ; 
        $result     = $this->db->fetchAll($phq) ;
        return $this->response_data_json($result) ;
    }
    
    public function getWardsAction() {
        $district_id    = $this->request->getPost('district_id', 'int') ;
        $type           = $this->request->getPost('type', 'string') ;
        
        $phq        = "SELECT * FROM wards WHERE `status` = 1" ;
        if($type === '*') $phq .= ' AND `id` > 0' ; 
        $phq        .= ' AND `district_id` = ' . $district_id ; 
        
        $result     = $this->db->fetchAll($phq) ;
        return $this->response_data_json($result) ;
    }
}

