<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 07.01.2015
 * Time: 19:56
 */

namespace BL\CommonBundle\Model;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait TextPublishedable
 * @package BL\CommonBundle\Model
 */
trait TextPublishedable
{

    /**
     * @var \DateTime $textPublished
     * @ORM\Column(name="text_published", type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="change", field={"text"})
     */
    protected $textPublished;

    /**
     * @return \DateTime
     */
    public function getTextPublished()
    {
        return $this->textPublished;
    }
}