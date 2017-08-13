<?php
namespace Vdevpro\Modules\Zendvn\Controllers\Jquery ;
use Vdevpro\Modules\Zendvn\Controllers\Zendvn;
use Vdevpro\Common\Models\Cities as Cities;
use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class PaginationController extends Zendvn {
    public function indexAction() {      
        $paginator = new PaginatorModel(
                                            [
                                                'data'    => Cities::find(),
                                                'limit'   => 10,
                                                'page'    => 1,
                                            ]
                    );             
        $this->tag->setTitle('Phân trang');
        $this->view->title  = 'Phân trang' ;
        $this->view->page  = $paginator->getPaginate();
        $this->view->pick('jquery/pagination/index') ;
    }
    
    public function loadAction() {
        //if(! $this->request->isAjax() ) return false;
        $page       = $this->request->getPost('page', 'int') ?: 2;
        $limit      = $this->request->getPost('limit', 'int') ?: 10;
        $limit      = $this->request->getPost('limit', 'int') ?: 10;
        $paginator  = new PaginatorModel(['data'    => Cities::find(),'limit'   => $limit, 'page'    => $page]);
        if(empty($paginator)) return false;
        $pagination = $paginator->getPaginate() ;
        $data = [ 'items'       => $pagination->items,
                  'current'     => $pagination->current,
                  'first'      => $pagination->first,
                  'before'      => $pagination->before,
                  'next'        => $pagination->next,
                  'last'        => $pagination->last,
                  'total_pages' => $pagination->total_pages,
                  'total_items' => $pagination->total_items,
        ];
        return $this->response_data_json($data);
    }
    
}