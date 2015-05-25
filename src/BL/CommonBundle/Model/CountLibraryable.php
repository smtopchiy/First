<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 06.01.2015
 * Time: 18:08
 */

namespace BL\CommonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait CountLibraryable
 * @package BL\CommonBundle\Model
 */
trait CountLibraryable
{

    /**
     * @ORM\Column(name="count_library", type="integer", nullable=true)
     * @var integer $countLibrary
     */
    protected $countLibrary;

    /**
     * @return int
     */
    public function getCountLibrary()
    {
        return $this->countLibrary;
    }

    /**
     * @param int $countLibrary
     */
    public function setCountLibrary($countLibrary)
    {
        $this->countLibrary = $countLibrary;
    }

    /**
     *
     */
    public function increaseCountLibrary()
    {
        $this->countLibrary += 1;
    }
}