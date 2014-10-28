<?php

namespace Icea\CEA478\HelpDeskBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Icea\CEA478\HelpDeskBundle\Entity\ChamadaStatus;
use Icea\CEA478\HelpDeskBundle\Form\ChamadaStatusType;

/**
 * ChamadaStatus controller.
 *
 */
class ChamadaStatusController extends Controller
{

    /**
     * Lists all ChamadaStatus entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HelpDeskBundle:ChamadaStatus')->findAll();

        return $this->render('HelpDeskBundle:ChamadaStatus:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ChamadaStatus entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ChamadaStatus();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('chamadastatus_show', array('id' => $entity->getId())));
        }

        return $this->render('HelpDeskBundle:ChamadaStatus:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ChamadaStatus entity.
     *
     * @param ChamadaStatus $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ChamadaStatus $entity)
    {
        $form = $this->createForm(new ChamadaStatusType(), $entity, array(
            'action' => $this->generateUrl('chamadastatus_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ChamadaStatus entity.
     *
     */
    public function newAction()
    {
        $entity = new ChamadaStatus();
        $form   = $this->createCreateForm($entity);

        return $this->render('HelpDeskBundle:ChamadaStatus:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ChamadaStatus entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:ChamadaStatus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChamadaStatus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HelpDeskBundle:ChamadaStatus:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ChamadaStatus entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:ChamadaStatus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChamadaStatus entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HelpDeskBundle:ChamadaStatus:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ChamadaStatus entity.
    *
    * @param ChamadaStatus $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ChamadaStatus $entity)
    {
        $form = $this->createForm(new ChamadaStatusType(), $entity, array(
            'action' => $this->generateUrl('chamadastatus_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ChamadaStatus entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:ChamadaStatus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChamadaStatus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('chamadastatus_edit', array('id' => $id)));
        }

        return $this->render('HelpDeskBundle:ChamadaStatus:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ChamadaStatus entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HelpDeskBundle:ChamadaStatus')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ChamadaStatus entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('chamadastatus'));
    }

    /**
     * Creates a form to delete a ChamadaStatus entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chamadastatus_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
