<?php 

require_once dirname(__FILE__) . '/../../bootstrap.php';
require_once dirname(__FILE__) . '/../../../../lib/model/doctrine/PluginsfDoctrinePayzenTransId.class.php';

$t = new lime_test(null, new lime_output_color());

//    public function getTransId()
//    {
//        $this->updateTransId();
//        $transId = $this->getCurrentId();
//        $this->setCurrentId($transId + 1);
//        $this->save();
//        return $transId;
//    }
//    
//    public function updateTransId()
//    {
//        $now = date('Y-m-d');
//        if (substr($this->getLastReset(), 0, 10) !== $now)
//        {
//          $this->setCurrentId(1);
//          $this->setLastReset($now);
//        }
//    }