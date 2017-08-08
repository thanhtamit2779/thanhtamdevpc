<?php
namespace Vdevpro\Modules\Zendvn\Controllers\Jquery ;
use Vdevpro\Modules\Zendvn\Controllers\Zendvn;

class AutocompleteController extends Zendvn {
    public function indexAction() {
        $this->tag->setTitle('Auto complete');
        $this->view->title  = 'Auto complete' ;
        $this->view->pick('jquery/autocomplete/index') ;
    }
    
    public function responseAction() {
        $keyword = $this->request->getPost('keyword', 'string');
        //$keyword = 'a';
        $limit   = $this->request->getPost('limit', 'int');
        //$limit   = 5;
        $phq     = "SELECT `id`,`name` FROM `cities` WHERE `status` = 1 AND `name` LIKE '%{$keyword}%' ORDER BY `order` ASC, `name` ASC LIMIT " . $limit;
        $result  = $this->db->fetchAll($phq) ;
        //echo '<pre>' ; print_r($result) ; echo '</pre>' ;
        //return false;
        return $this->response_data_json($result) ;
    }
}