<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 05.01.2015
 * Time: 19:58
 */

namespace BL\BookBundle\Entity;

use BL\CommonBundle\Model\Authorable;
use BL\CommonBundle\Model\Descriptionable;
use BL\CommonBundle\Model\Genreable;
use BL\CommonBundle\Model\Sluggable;
use BL\CommonBundle\Model\Titleable;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class HeaderBook
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"tell"="Tell", "novella"="Novella", "blog"="Blog"})
 * @ORM\Table(name="books.header_book")
 * @package BL\BookBundle\Entity
 * @ORM\HasLifecycleCallbacks
 */
class HeaderBook
{
    use Titleable,
        Sluggable,
        Descriptionable,
        Genreable,
        Authorable;

    /**
     *
     */
    public function __construct()
    {
        $this->genre = new ArrayCollection();
    }

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