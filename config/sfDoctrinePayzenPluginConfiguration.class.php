<?php

/**
 * sfDoctrinePayzenPlugin configuration.
 * 
 * @package    sfDoctrinePayzenPlugin
 * @subpackage config
 * @author     Patrick Dos Santos <patrick.dos-santos [at] solution-interactive.com>
 */
class sfDoctrinePayzenPluginConfiguration extends sfPluginConfiguration
{
    /**
     * @see sfPluginConfiguration
     */
    public function initialize()
    {
        $this->dispatcher->connect('routing.load_configuration', array('sfDoctrinePayzenRouting', 'listenToRoutingLoadConfigurationEvent'));
        $this->dispatcher->connect('sf_payzen_plugin.filter_vads_trans_id', array('sfDoctrinePayzenListener', 'filterTransId'));
    }
}