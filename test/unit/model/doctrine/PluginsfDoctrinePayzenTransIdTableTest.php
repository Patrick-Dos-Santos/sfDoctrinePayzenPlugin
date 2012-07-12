<?php 

require_once dirname(__FILE__) . '/../../bootstrap.php';
require_once dirname(__FILE__) . '/../../../../lib/model/doctrine/PluginsfDoctrinePayzenTransIdTable.class.php';


$t = new lime_test(null, new lime_output_color());
//
//    /**
//     * Returns an instance of this class.
//     *
//     * @return PluginsfDoctrinePayzenTransIdTable The table instance
//     */
//    public static function getInstance()
//    {
//        return Doctrine_Core::getTable('PluginsfDoctrinePayzenTransId');
//    }