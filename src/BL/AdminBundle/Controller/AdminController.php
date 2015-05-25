<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 10.01.2015
 * Time: 11:25
 */

namespace BL\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AdminController
 * @package BL\AdminBundle\Controller
 */
class AdminController extends Controller
{
    /**
     * @return string
     */
    public function indexAction()
    {
        return $this->render('BLAdminBundle:admin:index.html.twig');
    }
}