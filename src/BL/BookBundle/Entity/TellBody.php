<?php

namespace BL\BookBundle\Entity;

use BL\CommonBundle\Model\Bookable;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tell
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class TellBody extends LiteratureBody
{
    use Bookable;
}
