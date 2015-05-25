<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 07.01.2015
 * Time: 21:24
 */

namespace BL\CommonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait Countable
 * @package BL\CommonBundle\Model
 */
trait Countable
{

    /**
     * @ORM\Column(name="count", type="integer", nullable=true)
     * @var integer $count
     */
    protected $count;

    /**
     *
     */
    public function increaseCount()
    {
        $this->count += 1;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }
}