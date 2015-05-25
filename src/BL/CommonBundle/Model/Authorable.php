<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 04.01.2015
 * Time: 23:16
 */

namespace BL\CommonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait Authorable
 * @package BL\CommonBundle\Model
 */
trait Authorable
{

    /**
     * @ORM\ManyToOne(targetEntity="BL\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id")
     */
    protected $author;

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

}