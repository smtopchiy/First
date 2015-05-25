<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 07.01.2015
 * Time: 20:00
 */

namespace BL\CommonBundle\Model;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait CreatedAtable
 * @package BL\CommonBundle\Model
 */
trait CreatedAtable
{

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     * @var
     */
    protected $createdAt;

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}