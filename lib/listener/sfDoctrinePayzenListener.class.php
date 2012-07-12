<?php

/**
 * sfDoctrinePayzenListener is the listener for the sfDoctrinePayzenPlugin
 * 
 * @package    sfDoctrinePayzenPlugin
 * @subpackage listener
 * @author     Patrick Dos Santos <patrick.dos-santos [at] solution-interactive.com>
 */
class sfDoctrinePayzenListener
{
    /**
     * Retrieves the correct vads_trans_id from the database.
     * The id must be unique for a given day.
     * 
     * @param sfEvent $event The event notified
     * @param type $result The result to filter, unused in this case
     * @return int The current transaction id to send to Payzen 
     */
    public static function filterTransId(sfEvent $event, $result)
    {
        $sfDoctrinePayzenTransId = sfDoctrinePayzenTransIdTable::getSfDoctrinePayzenTransId();
        return $sfDoctrinePayzenTransId->getTransId();
    }
}