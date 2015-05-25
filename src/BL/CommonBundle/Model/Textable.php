<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 04.01.2015
 * Time: 22:38
 */

namespace BL\CommonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait Textable
 * @package BL\CommonBundle\Model
 */
trait Textable
{
    /**
     * @var string $text
     * @ORM\Column(name="text", type="text")
     */
    protected $text;
    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


}