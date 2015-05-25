<?php

namespace BL\BookBundle\Entity;

use BL\CommonBundle\Model\Titleable;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\AttributeOverrides({
 *      @ORM\AttributeOverride(name="title",
 *      column=@ORM\Column(nullable=true)
 * )
 * })
 * @ORM\HasLifecycleCallbacks
 */
class NovellaBody extends LiteratureBody
{
    use Titleable;
    /**
     * @ORM\ManyToOne(targetEntity="BL\BookBundle\Entity\Novella", inversedBy="text")
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
