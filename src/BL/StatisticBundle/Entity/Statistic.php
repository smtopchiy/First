<?php

namespace BL\StatisticBundle\Entity;

use BL\CommonBundle\Model\CountBuyable;
use BL\CommonBundle\Model\CountCommentable;
use BL\CommonBundle\Model\CountDownloadable;
use BL\CommonBundle\Model\CountLibraryable;
use BL\CommonBundle\Model\CountReadable;
use BL\CommonBundle\Model\Ratingable;
use BL\CommonBundle\Model\Sizeable;
use Doctrine\ORM\Mapping as ORM;

/**
 * Statistic
 *
 * @ORM\Table(name="statistic.common_statistic")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Statistic
{
    use CountReadable,
        CountDownloadable,
        CountBuyable,
        CountCommentable,
        CountLibraryable,
        Ratingable,
        Sizeable;
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
     * @ORM\OneToOne(targetEntity="BL\BookBundle\Entity\LiteratureHeader", inversedBy="statistic" )
     * @ORM\JoinColumn(name="book_id", referencedColumnName="id")
     * @var
     */
    protected $book;

    /**
     * @return mixed
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * @param mixed $book
     */
    public function setBook($book)
    {
        $this->book = $book;
    }
}
