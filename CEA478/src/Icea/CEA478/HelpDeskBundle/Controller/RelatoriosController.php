<?php

namespace Icea\CEA478\HelpDeskBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Icea\CEA478\HelpDeskBundle\Entity\Relatorios;
use Icea\CEA478\HelpDeskBundle\Form\RelatoriosType;

/**
 * Relatorios controller.
 *
 */
class RelatoriosController extends Controller
{

    /**
     * Lists all Relatorios entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HelpDeskBundle:Relatorios')->findAll();

        return $this->render('HelpDeskBundle:Relatorios:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Relatorios entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Relatorios();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('relatorios_show', array('id' => $entity->getId())));
        }

        return $this->render('HelpDeskBundle:Relatorios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Relatorios entity.
     *
     * @param Relatorios $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Relatorios $entity)
    {
        $form = $this->createForm(new RelatoriosType(), $entity, array(
            'action' => $this->generateUrl('relatorios_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Relatorios entity.
     *
     */
    public function newAction()
    {
        $entity = new Relatorios();
        $form   = $this->createCreateForm($entity);

        return $this->render('HelpDeskBundle:Relatorios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Relatorios entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:Relatorios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Relatorios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HelpDeskBundle:Relatorios:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Relatorios entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:Relatorios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Relatorios entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HelpDeskBundle:Relatorios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Relatorios entity.
    *
    * @param Relatorios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Relatorios $entity)
    {
        $form = $this->createForm(new RelatoriosType(), $entity, array(
            'action' => $this->generateUrl('relatorios_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Relatorios entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:Relatorios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Relatorios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('relatorios_edit', array('id' => $id)));
        }

        return $this->render('HelpDeskBundle:Relatorios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Relatorios entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HelpDeskBundle:Relatorios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Relatorios entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('relatorios'));
    }

    /**
     * Creates a form to delete a Relatorios entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('relatorios_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
