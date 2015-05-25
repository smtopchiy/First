<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 08.01.2015
 * Time: 11:50
 */

namespace BL\CommonBundle\Event;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class BLEventSubscriber
 * @package BL\CommonBundle\Event
 */
class BLEventSubscriber implements EventSubscriberInterface
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return array('bl.create_book' => 'onBLCreateBook');
    }

    /**
     * @param BLEvent $event
     */
    public function onBLCreateBook(BLEvent $event)
    {

    }

}