<?php

namespace Atch34\ProjectTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('Atch34ProjectTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
