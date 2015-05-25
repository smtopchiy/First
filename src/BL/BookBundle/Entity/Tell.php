<?php

namespace BL\BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tell
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Tell extends LiteratureHeader
{
    /**
     * @ORM\OneToOne(targetEntity="BL\BookBundle\Entity\TellBody", mappedBy="book", cascade={"persist"})
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
