<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 06.01.2015
 * Time: 10:16
 */

namespace BL\BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LiteratureBody
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
abstract class LiteratureBody extends BodyBook
{

}