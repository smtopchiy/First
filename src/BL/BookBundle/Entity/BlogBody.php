<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 05.01.2015
 * Time: 23:26
 */

namespace BL\BookBundle\Entity;

use BL\CommonBundle\Model\Bookable;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class BlogBody extends BodyBook
{
    use Bookable;
}
