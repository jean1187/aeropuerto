<?php

namespace Taller\AeronauticoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AeronaveController extends Controller
{
    
    public function indexAction($name,$_format)
    {
        return $this->render('AeronauticoBundle:Aeronave:index.'.$_format.'.twig', array('name' => $name,'format'=>$_format));
    }
}
