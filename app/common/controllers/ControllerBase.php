<?php
namespace Vdevpro\Common\Controllers;
use Phalcon\Mvc\Controller as Controller;
class ControllerBase extends Controller {
     protected function response_data_json($data = null, $message = null) {
         $response = array() ;         
         if(empty($data)) {
             $response['data']  = array() ;
             $response['msg']   = 'Load dữ liệu không thành công' ;
             return $this->response->setStatusCode(200, 'Not Found')
                                   ->setJsonContent($response)
                                   ->send();
         }
         $response['msg']      = 'Load dữ liệu thành công' ;
         $response['data']     = $data;
         return $this->response->setStatusCode(200, 'OK')
                               ->setJsonContent($response)
                               ->send();
     }
}
