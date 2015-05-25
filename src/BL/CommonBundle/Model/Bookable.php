<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 06.01.2015
 * Time: 22:48
 */

namespace BL\CommonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait Bookable
 * @package BL\CommonBundle\Model
 */
trait Bookable
{
    /**
     * @ORM\ManyToOne(targetEntity="BL\BookBundle\Entity\Tell")
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