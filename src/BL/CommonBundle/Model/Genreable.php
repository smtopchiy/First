<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 05.01.2015
 * Time: 14:47
 */

namespace BL\CommonBundle\Model;

use BL\AdminBundle\Entity\Genre;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait Genreable
 * @package BL\CommonBundle\Model
 */
trait Genreable
{

    /**
     * @ORM\ManyToMany(targetEntity="BL\AdminBundle\Entity\Genre", mappedBy="genreTell")
     * @ORM\JoinTable(name="books.genre_tell")
     * @var ArrayCollection $genre
     */
    protected $genre;

    /**
     * @return ArrayCollection
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param ArrayCollection $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @param Genre $genre
     * @return $this
     */
    public function addGenre(Genre $genre)
    {
        $this->genre->add($genre);

        return $this;
    }

    /**
     * @param Genre $genre
     */
    public function removeGenre(Genre $genre)
    {
        $this->genre->removeElement($genre);
    }
}