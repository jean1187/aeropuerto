<?php

namespace Taller\AeronauticoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Symfony\Component\HttpFoundation\Response;

use Taller\AeronauticoBundle\Form\AeronaveType;



class AeronaveController extends Controller
{
    
    public function listAction()
    {
        
         $em = $this->get('doctrine')->getEntityManager();

        return $this->render('AeronauticoBundle:Aeronave:list.html.twig', array(
            'aeronaves' => $em->getRepository('AeronauticoBundle:Aeronave')->findAll()
        ));
     
     
    }//fin index

    
    public function newAction()
    {
        $peticion = $this->getRequest();
        $formulario = $this->get('form.factory')->create(new AeronaveType(array("serial"=>'as')));
       
        if ($peticion->getMethod() == 'POST') {
            $formulario->bindRequest($peticion);
            if ($formulario->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $aeronave = $formulario->getData();
                $em->persist($aeronave);
                $em->flush();
                $peticion->getSession()->setFlash('notice', 'Se ha creado correctamente la aeronave');

                return $this->redirect($this->generateUrl('_AeronauticoBundle_edit', array(
                    'id' => $aeronave->getId()
                )));
            }//fin si es valido
        }//fin post

        return $this->render('AeronauticoBundle:Aeronave:new.html.twig', array(
            'form' => $formulario->createView()
        ));
    }//fin new
    
     public function editAction($id)
    {
            $peticion = $this->getRequest();
            $em = $this->getDoctrine()->getEntityManager();

            if (null == $aeronave = $em->find('AeronauticoBundle:Aeronave', $id)) {
                throw new NotFoundHttpException('No existe la aeronave que se quiere modificar');
            }

            $formulario = $this->get('form.factory')->create(new AeronaveType());
            $formulario->setData($aeronave);

            if ($peticion->getMethod() == 'POST') {
                $formulario->bindRequest($peticion);

                if ($formulario->isValid()) {
                    $em->persist($aeronave);
                    $em->flush();

                    return $this->redirect($this->generateUrl('_AeronauticoBundle_homepage'));
                }
            }

            return $this->render('AeronauticoBundle:Aeronave:edit.html.twig', array(
                'form' => $formulario->createView(),
                'aeronave'   => $aeronave
            ));
    }//fin edit

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        if (null == $aeronave = $em->find('AeronauticoBundle:Aeronave', $id)) {
            throw $this->createNotFoundException('No existe la Aeronave que se quiere ver');
        }

        return $this->render('AeronauticoBundle:Aeronave:show.html.twig', array(
            'aeronave'   => $aeronave
        ));
    }//fin show    
    
    public function delAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $aeronave   = $em->getRepository("AeronauticoBundle:Aeronave")->findOneBy(array('id' => $id));
        $em->remove($aeronave);
        $em->flush();
        return $this->redirect($this->generateUrl('_AeronauticoBundle_homepage'));
    }
    
}//fin class
