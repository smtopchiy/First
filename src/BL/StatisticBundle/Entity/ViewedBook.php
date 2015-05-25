<?php

namespace BL\StatisticBundle\Entity;

use BL\CommonBundle\Model\Authorable;
use BL\CommonBundle\Model\BodyBookable;
use BL\CommonBundle\Model\Bookable;
use BL\CommonBundle\Model\CreatedAtable;
use Doctrine\ORM\Mapping as ORM;

/**
 * ViewedBook
 *
 * @ORM\Table(name="statistic.viewed_book")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class ViewedBook
{
    use Bookable,
        BodyBookable,
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
