<?php

namespace User\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	$name='this is testing '.$name;
        return $this->render('UsermanagementBundle:Default:index.html.twig', array('name' => $name));
    }
     public function showAction()
    {
    	$name='this is testing  also ttesti';
        return $this->render('UsermanagementBundle:Default:index.html.twig', array('name' => $name));
    }
}
