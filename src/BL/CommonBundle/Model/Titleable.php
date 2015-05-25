<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 04.01.2015
 * Time: 23:02
 */

namespace BL\CommonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait Titleable
 * @package BL\CommonBundle\Model
 */
trait Titleable
{

    /**
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     * @var string $title
     */
    protected $title;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}