<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 07.01.2015
 * Time: 20:20
 */

namespace BL\CommonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait BodyBookable
 * @package BL\CommonBundle\Model
 */
trait BodyBookable
{
    /**
     * @ORM\ManyToOne(targetEntity="BL\BookBundle\Entity\BodyBook")
     * @ORM\JoinColumn(name="body_id", referencedColumnName="id")
     * @var
     */
    protected $bodyBook;

    /**
     * @return mixed
     */
    public function getBodyBook()
    {
        return $this->bodyBook;
    }

    /**
     * @param mixed $bodyBook
     */
    public function setBodyBook($bodyBook)
    {
        $this->bodyBook = $bodyBook;
    }
}