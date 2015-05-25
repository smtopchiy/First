<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 06.01.2015
 * Time: 18:00
 */

namespace BL\CommonBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait CountDownloadable
 * @package BL\CommonBundle\Model
 */
trait CountDownloadable
{

    /**
     * @ORM\Column(name="count_download", type="integer", nullable=true)
     * @var integer $countDownload
     */
    protected $countDownload;

    /**
     * @return int
     */
    public function getCountDownload()
    {
        return $this->countDownload;
    }

    /**
     * @param int $countDownload
     */
    public function setCountDownload($countDownload)
    {
        $this->countDownload = $countDownload;
    }

    /**
     *
     */
    public function increaseCountDownload()
    {
        $this->countDownload += 1;
    }
}