<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 06.01.2015
 * Time: 20:03
 */

namespace BL\CommonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait Sizeable
 * @package BL\CommonBundle\Model
 */
trait Sizeable
{

    /**
     * @ORM\Column(name="size", type="integer", nullable=true)
     * @var integer $size
     */
    protected $size;

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }
}