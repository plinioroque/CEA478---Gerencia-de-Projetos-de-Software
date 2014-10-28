<?php

namespace Icea\CEA478\HelpDeskBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Icea\CEA478\HelpDeskBundle\Entity\ChamadaLocal;
use Icea\CEA478\HelpDeskBundle\Form\ChamadaLocalType;

/**
 * ChamadaLocal controller.
 *
 */
class ChamadaLocalController extends Controller
{

    /**
     * Lists all ChamadaLocal entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HelpDeskBundle:ChamadaLocal')->findAll();

        return $this->render('HelpDeskBundle:ChamadaLocal:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ChamadaLocal entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ChamadaLocal();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('chamadalocal_show', array('id' => $entity->getId())));
        }

        return $this->render('HelpDeskBundle:ChamadaLocal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ChamadaLocal entity.
     *
     * @param ChamadaLocal $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ChamadaLocal $entity)
    {
        $form = $this->createForm(new ChamadaLocalType(), $entity, array(
            'action' => $this->generateUrl('chamadalocal_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ChamadaLocal entity.
     *
     */
    public function newAction()
    {
        $entity = new ChamadaLocal();
        $form   = $this->createCreateForm($entity);

        return $this->render('HelpDeskBundle:ChamadaLocal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ChamadaLocal entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:ChamadaLocal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChamadaLocal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HelpDeskBundle:ChamadaLocal:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ChamadaLocal entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:ChamadaLocal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChamadaLocal entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HelpDeskBundle:ChamadaLocal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ChamadaLocal entity.
    *
    * @param ChamadaLocal $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ChamadaLocal $entity)
    {
        $form = $this->createForm(new ChamadaLocalType(), $entity, array(
            'action' => $this->generateUrl('chamadalocal_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ChamadaLocal entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:ChamadaLocal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChamadaLocal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('chamadalocal_edit', array('id' => $id)));
        }

        return $this->render('HelpDeskBundle:ChamadaLocal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ChamadaLocal entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HelpDeskBundle:ChamadaLocal')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ChamadaLocal entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('chamadalocal'));
    }

    /**
     * Creates a form to delete a ChamadaLocal entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chamadalocal_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
