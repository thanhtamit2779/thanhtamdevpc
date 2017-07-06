<?php
namespace Vdevpro\Modules\Zendvn\Models ;
use Vdevpro\Common\Models\ModelBase;
use Phalcon\Mvc\Model\Manager ;
use Phalcon\Mvc\Model\Query;

class PluginModel extends ModelBase {
    public function initialize()
    {
        $this->setSource('cities');
    }
    
    
}