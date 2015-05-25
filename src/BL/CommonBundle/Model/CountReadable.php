<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 06.01.2015
 * Time: 17:58
 */

namespace BL\CommonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait CountReadable
 * @package BL\CommonBundle\Model
 */
trait CountReadable
{

    /**
     * @ORM\Column(name="count_read", type="integer", nullable=true)
     * @var integer $countRead
     */
    protected $countRead;

    /**
     * @return int
     */
    public function getCountRead()
    {
        return $this->countRead;
    }

    /**
     * @param int $countRead
     */
    public function setCountRead($countRead)
    {
        $this->countRead = $countRead;
    }

    /**
     *
     */
    public function increaseCountRead()
    {
        $this->countRead += 1;
    }
}