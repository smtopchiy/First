<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 05.01.2015
 * Time: 23:26
 */

namespace BL\BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Blog extends HeaderBook
{
    /**
     * @ORM\OneToOne(targetEntity="BL\BookBundle\Entity\BlogBody", mappedBy="book")
     * @var
     */
    protected $text;

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }
}
