<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 07.01.2015
 * Time: 20:03
 */

namespace BL\CommonBundle\Model;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait UpdatedAtable
 * @package BL\CommonBundle\Model
 */
trait UpdatedAtable
{

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     * @var \DateTime $updatedAt
     */
    protected $updatedAt;

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}