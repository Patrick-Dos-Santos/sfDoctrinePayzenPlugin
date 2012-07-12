<?php

/**
 * sfDoctrinePayzenRouting Routing for the sfDoctrinePayzenPlugin
 * 
 * @package    sfDoctrinePayzenPlugin
 * @subpackage routing
 * @author     Patrick Dos Santos <patrick.dos-santos [at] solution-interactive.com>
 */
class sfDoctrinePayzenRouting
{
    /**
     * Listens to the routing.load_configuration event.
     *
     * @param sfEvent An sfEvent instance
     * @static
     */
    static public function listenToRoutingLoadConfigurationEvent(sfEvent $event)
    {
        $event->getSubject()->prependRoute('sf_payzen_payment', new sfDoctrineRouteCollection(array(
                    'name' => 'sf_doctrine_payzen_payment',
                    'model' => 'sfDoctrinePayzenPayment_2_8',
                    'module' => 'sf_doctrine_payzen_payment_2_8',
                    'prefix_path' => 'payzen/payments',
                    'with_wildcard_routes' => true,
                    'collection_actions' => array('filter' => 'post', 'batch' => 'post'),
                    'requirements' => array(),
                )));
    }
}