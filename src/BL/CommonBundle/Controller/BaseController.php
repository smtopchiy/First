<?php
/**
 * Created by PhpStorm.
 * User: Topchiy
 * Date: 08.01.2015
 * Time: 12:49
 */

namespace BL\CommonBundle\Controller;


use BL\CommonBundle\Model\BaseManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class BaseController
 * @package BL\CommonBundle\Controller
 */
abstract class BaseController extends Controller
{

    /**
     * @return BaseManager
     */
    abstract public function getObjectManager();

    /**
     * @return object $object
     */
    abstract public function getObjectForContent();

    /**
     * @return string
     */
    abstract public function getFormType();

    /**
     * @return string
     */
    abstract protected function getObjectName();

    /**
     * @return string
     */
    abstract protected function getUrlAfterAddObject();

    /**
     * @param Request $request
     * @return string
     */
    public function addAction(Request $request)
    {
        $object = $this->getObjectForContent();
        $form = $this->getFormForContent($object);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->getObjectManager()->create($object);

            return $this->generateUrl($this->getUrlAfterAddObject());
        }

        return $this->generateObjectAddUrl();
    }

    /**
     * @param object $object
     * @return Form
     */
    public function getFormForContent($object)
    {
        $form = $this->createForm($this->getFormType(), $object, [
            'action' => $this->generateObjectAddUrl(),
            'method' => 'POST'
        ]);

        return $form;
    }

    /**
     * @return string
     */
    private function generateObjectAddUrl()
    {
        return $this->generateUrl('bl_' . $this->getObjectStrlowerName() . '_manage_add');
    }

    /**
     * @return string
     */
    private function getObjectStrlowerName()
    {
        return strtolower($this->getObjectName());
    }
}