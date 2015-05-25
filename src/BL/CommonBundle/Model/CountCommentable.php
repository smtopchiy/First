<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 06.01.2015
 * Time: 18:05
 */

namespace BL\CommonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class CountCommentable
 * @package BL\CommonBundle\Model
 */
trait CountCommentable
{

    /**
     * @ORM\Column(name="count_comment", type="integer", nullable=true)
     * @var integer $countComment
     */
    protected $countComment;

    /**
     * @return int
     */
    public function getCountComment()
    {
        return $this->countComment;
    }

    /**
     * @param int $countComment
     */
    public function setCountComment($countComment)
    {
        $this->countComment = $countComment;
    }

    /**
     *
     */
    public function increaseCountComment()
    {
        $this->countComment += 1;
    }
}