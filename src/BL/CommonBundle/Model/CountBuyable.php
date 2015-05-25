<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 06.01.2015
 * Time: 18:03
 */

namespace BL\CommonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait CountBuyable
 * @package BL\CommonBundle\Model
 */
trait CountBuyable
{

    /**
     * @ORM\Column(name="count_buy", type="integer", nullable=true)
     * @var integer $countBuy
     */
    protected $countBuy;

    /**
     * @return int
     */
    public function getCountBuy()
    {
        return $this->countBuy;
    }

    /**
     * @param int $countBuy
     */
    public function setCountBuy($countBuy)
    {
        $this->countBuy = $countBuy;
    }

    /**
     *
     */
    public function increaseCountBuy()
    {
        $this->countBuy += 1;
    }
}