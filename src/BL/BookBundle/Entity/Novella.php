<?php

namespace BL\BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Novella extends LiteratureHeader
{
    /**
     * @ORM\OneToMany(targetEntity="BL\BookBundle\Entity\NovellaBody", mappedBy="book")
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
