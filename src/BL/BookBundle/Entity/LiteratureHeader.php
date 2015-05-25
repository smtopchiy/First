<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 06.01.2015
 * Time: 23:25
 */

namespace BL\BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class LiteratureHeader
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @package BL\BookBundle\Entity
 */
abstract class LiteratureHeader extends HeaderBook
{
    /**
     * @ORM\OneToOne(targetEntity="BL\StatisticBundle\Entity\Statistic", mappedBy="book", cascade={"persist", "remove"})
     * @var
     */
    protected $statistic;

    /**
     * @return mixed
     */
    public function getStatistic()
    {
        return $this->statistic;
    }

    /**
     * @param mixed $statistic
     */
    public function setStatistic($statistic)
    {
        $this->statistic = $statistic;
    }

}