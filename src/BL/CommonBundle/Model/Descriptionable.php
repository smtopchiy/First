<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 04.01.2015
 * Time: 23:08
 */

namespace BL\CommonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait Descriptionable
 * @package BL\CommonBundle\Model
 */
trait Descriptionable
{

    /**
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     * @var string $description
     */
    protected $description;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}