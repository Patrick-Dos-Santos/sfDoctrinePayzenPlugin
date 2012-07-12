<?php 

require_once dirname(__FILE__) . '/../bootstrap.php';
require_once dirname(__FILE__) . '/../../../lib/listener/sfDoctrinePayzenListener.class.php';
require_once dirname(__FILE__) . '/../../../../lib/model/doctrine/sfDoctrinePayzenTransIdTable.class.php';

//init connection
$databaseManager = new sfDatabaseManager($configuration);

$t = new lime_test(null, new lime_output_color());

//->filterTransId()
$t->diag('->filterTransId()');

$listener = new sfDoctrinePayzenListener();

$t->isa_ok($listener->filterTransId(new sfEvent(), 'foo'), 'toto', '->filterTransId() returns an integer');

//
//    public static function filterTransId(sfEvent $event, $result)
//    {
//        $sfDoctrinePayzenTransId = sfDoctrinePayzenTransIdTable::getSfDoctrinePayzenTransId();
//        return $sfDoctrinePayzenTransId->getTransId();
//    }