<?php

namespace BL\StatisticBundle\Entity;

use BL\CommonBundle\Model\BodyBookable;
use BL\CommonBundle\Model\Bookable;
use BL\CommonBundle\Model\Countable;
use Doctrine\ORM\Mapping as ORM;

/**
 * DownloadStatistic
 *
 * @ORM\Table(name="statistic.download_statistic")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class DownloadStatistic
{
    use Bookable,
        BodyBookable,
        Countable;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(name="date_st", type="date", nullable=false)
     * @var
     */
    protected $dateSt;

    /**
     * @return mixed
     */
    public function getDateSt()
    {
        return $this->dateSt;
    }

    /**
     * @param mixed $dateSt
     */
    public function setDateSt($dateSt)
    {
        $this->dateSt = $dateSt;
    }
}
