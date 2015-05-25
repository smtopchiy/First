<?php

namespace BL\StatisticBundle\Entity;

use BL\CommonBundle\Model\Authorable;
use BL\CommonBundle\Model\Bookable;
use BL\CommonBundle\Model\CreatedAtable;
use Doctrine\ORM\Mapping as ORM;

/**
 * Download
 *
 * @ORM\Table(name="statistic.download")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Download
{
    use Bookable,
        Authorable,
        CreatedAtable;
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
}
