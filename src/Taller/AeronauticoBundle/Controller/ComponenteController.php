<?php

namespace Taller\AeronauticoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Taller\AeronauticoBundle\Entity\Componente;
use Taller\AeronauticoBundle\Form\ComponenteType;

/**
 * Componente controller.
 *
 */
class ComponenteController extends Controller
{
    /**
     * Lists all Componente entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $componentes= $em->getRepository('AeronauticoBundle:Componente')->findAll();

        return $this->render('AeronauticoBundle:Componente:index.html.twig', array(
            'componentes' => $componentes
        ));
    }

    /**
     * Finds and displays a Componente entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AeronauticoBundle:Componente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Componente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AeronauticoBundle:Componente:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to create a new Componente entity.
     *
     */
    public function newAction()
    {
        $entity = new Componente();
        $form   = $this->createForm(new ComponenteType(), $entity);

        return $this->render('AeronauticoBundle:Componente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Componente entity.
     *
     */
    public function createAction()
    {
        $entity  = new Componente();
        $request = $this->getRequest();
        $form    = $this->createForm(new ComponenteType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('componente_show', array('id' => $entity->getId())));
            
        }

        return $this->render('AeronauticoBundle:Componente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Componente entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AeronauticoBundle:Componente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Componente entity.');
        }

        $editForm = $this->createForm(new ComponenteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AeronauticoBundle:Componente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Componente entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AeronauticoBundle:Componente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Componente entity.');
        }

        $editForm   = $this->createForm(new ComponenteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('componente_edit', array('id' => $id)));
        }

        return $this->render('AeronauticoBundle:Componente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Componente entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AeronauticoBundle:Componente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Componente entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('componente'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
