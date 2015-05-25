<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 04.01.2015
 * Time: 23:20
 */

namespace BL\CommonBundle\Model;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait Sluggable
 * @package BL\CommonBundle\Model
 */
trait Sluggable
{

    /**
     * @Gedmo\Slug(handlers={
     *      @Gedmo\SlugHandler(class="Gedmo\Sluggable\Handler\RelativeSlugHandler", options={
     *          @Gedmo\SlugHandlerOption(name="relationField", value="author"),
     *          @Gedmo\SlugHandlerOption(name="relationSlugField", value="alias"),
     *          @Gedmo\SlugHandlerOption(name="separator", value="/")
     *          }
     *      )
     * }, separator="_", updatable=true, fields={"title"} )
     * @ORM\Column(name="slug", type="string", length=500, nullable=false)
     * @var string $slug
     */
    protected $slug;

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}