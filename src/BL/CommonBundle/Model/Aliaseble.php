<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 04.01.2015
 * Time: 23:40
 */

namespace BL\CommonBundle\Model;


use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait Aliaseble
 * @package BL\CommonBundle\Model
 */
trait Aliaseble
{

    /**
     * @Gedmo\Slug(handlers={
     *      @Gedmo\SlugHandler(class="Gedmo\Sluggable\Handler\InversedRelativeSlugHandler", options={
     *          @Gedmo\SlugHandlerOption(name="relationClass", value="BL\BookBundle\Tell"),
     *          @Gedmo\SlugHandlerOption(name="mappedBy", value="author"),
     *          @Gedmo\SlugHandlerOption(name="inverseSlugField", value="slug")
     *      }),
     *      @Gedmo\SlugHandler(class="Gedmo\Sluggable\Handler\InversedRelativeSlugHandler", options={
     *          @Gedmo\SlugHandlerOption(name="relationClass", value="BL\BookBundle\Novell"),
     *          @Gedmo\SlugHandlerOption(name="mappedBy", value="author"),
     *          @Gedmo\SlugHandlerOption(name="inverseSlugField", value="slug")
     *      })
     * }, fields={"username"})
     * @ORM\Column(name="alias", type="string", length=200, nullable=true)
     * @var string $alias
     */
    protected $alias;

    /**
     * @return mixed
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }
}