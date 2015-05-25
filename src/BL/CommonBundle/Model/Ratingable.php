<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 06.01.2015
 * Time: 18:12
 */

namespace BL\CommonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait Ratingable
 * @package BL\CommonBundle\Model
 */
trait Ratingable
{

    /**
     * @ORM\Column(name="rating_sum", type="integer", nullable=true)
     * @var integer $ratingSum
     */
    protected $ratingSum;

    /**
     * @ORM\Column(name="rating_count", type="integer", nullable=true)
     * @var integer $ratingCount
     */
    protected $ratingCount;

    /**
     * @return int
     */
    public function getRatingSum()
    {
        return $this->ratingSum;
    }

    /**
     * @param int $ratingSum
     */
    public function setRatingSum($ratingSum)
    {
        $this->ratingSum = $ratingSum;
    }

    /**
     * @return int
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * @param int $ratingCount
     */
    public function setRatingCount($ratingCount)
    {
        $this->ratingCount = $ratingCount;
    }

}