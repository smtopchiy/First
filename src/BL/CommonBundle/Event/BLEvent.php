<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 08.01.2015
 * Time: 11:34
 */

namespace BL\CommonBundle\Event;


use Symfony\Component\EventDispatcher\Event;

/**
 * Class BLEvent
 * @package BL\CommonBundle\Event
 */
class BLEvent extends Event
{
    const CREATE_BOOK = 'bl.create_book';

    protected $object;

    /**
     * @param object $object
     */
    public function __construct($object)
    {
        $this->object = $object;
    }

    /**
     * @return object
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param object $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }


}