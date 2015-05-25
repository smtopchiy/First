<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 28.12.2014
 * Time: 19:52
 */

namespace BL\UserBundle\Entity;

use BL\CommonBundle\Model\Aliaseble;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="users.users")
 */
class User extends BaseUser
{
    use Aliaseble;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->enabled = true;
        $this->enabledBlog = true;
        $this->enabledComment = true;
    }

    /**
     * @ORM\Column(name="enabled_comment", type="boolean")
     * @var bool
     */
    protected $enabledComment;

    /**
     * @return boolean
     */
    public function isEnabledComment()
    {
        return $this->enabledComment;
    }

    /**
     * @param boolean $enabledComment
     */
    public function setEnabledComment($enabledComment)
    {
        $this->enabledComment = $enabledComment;
    }

    /**
     * @ORM\Column(name="enabled_blog", type="boolean")
     * @var bool
     */
    protected $enabledBlog;

    /**
     * @return boolean
     */
    public function isEnabledBlog()
    {
        return $this->enabledBlog;
    }

    /**
     * @param boolean $enabledBlog
     */
    public function setEnabledBlog($enabledBlog)
    {
        $this->enabledBlog = $enabledBlog;
    }
}