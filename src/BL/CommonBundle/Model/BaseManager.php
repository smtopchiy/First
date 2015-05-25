<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 07.01.2015
 * Time: 21:37
 */

namespace BL\CommonBundle\Model;

use BL\CommonBundle\Event\BLEvent;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher;

/**
 * Class BaseManager
 * @package BL\CommonBundle\Model
 */
abstract class BaseManager
{
    protected $om;

    protected $dispatcher;

    /**
     * @param EntityManager            $om
     * @param TraceableEventDispatcher $dispatcher
     */
    public function __construct(EntityManager $om, TraceableEventDispatcher $dispatcher)
    {
        $this->om = $om;
        $this->dispatcher = $dispatcher;
    }

    /**
     * @param object $object
     */
    public function remove($object)
    {
        $this->om->remove($object);
        $this->om->flush();
    }

    /**
     * @param object $object
     */
    public function update($object)
    {
        $this->om->persist($object);
        $this->om->flush();
    }

    /**
     * @param object $object
     */
    public function create($object)
    {

        $this->om->persist($object);
        $this->dispatcher->dispatch(BLEvent::CREATE_BOOK, new BLEvent($object));
        $this->om->flush();
    }


}