<?php

namespace Taller\AeronauticoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('AeronauticoBundle:Default:index.html.twig', array('name' => $name));
    }
}
