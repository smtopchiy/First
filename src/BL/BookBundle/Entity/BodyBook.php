<?php

namespace BL\BookBundle\Entity;

use BL\CommonBundle\Model\Textable;
use Doctrine\ORM\Mapping as ORM;

/**
 * BodyBook
 *
 * @ORM\Table(name="books.body_book")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"tell"="TellBody", "novella"="NovellaBody", "blog"="BlogBody"})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class BodyBook
{
    use Textable;
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
