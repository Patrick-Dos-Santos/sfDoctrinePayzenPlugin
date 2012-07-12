<?php 

require_once dirname(__FILE__) . '/../bootstrap.php';
require_once dirname(__FILE__) . '/../../../lib/routing/sfDoctrinePayzenRouting.class.php';

$t = new lime_test(null, new lime_output_color());

// static public function listenToRoutingLoadConfigurationEvent(sfEvent $event)
//    {
//        $event->getSubject()->prependRoute('sf_payzen_payment', new sfDoctrineRouteCollection(array(
//                    'name' => 'sf_doctrine_payzen_payment',
//                    'model' => 'sfDoctrinePayzenPayment_2_8',
//                    'module' => 'sf_doctrine_payzen_payment_2_8',
//                    'prefix_path' => 'payzen/payments',
//                    'with_wildcard_routes' => true,
//                    'collection_actions' => array('filter' => 'post', 'batch' => 'post'),
//                    'requirements' => array(),
//                )));
//    }