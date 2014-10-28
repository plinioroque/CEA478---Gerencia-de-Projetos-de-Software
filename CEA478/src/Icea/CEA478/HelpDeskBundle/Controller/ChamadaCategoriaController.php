<?php

namespace Icea\CEA478\HelpDeskBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Icea\CEA478\HelpDeskBundle\Entity\ChamadaCategoria;
use Icea\CEA478\HelpDeskBundle\Form\ChamadaCategoriaType;

/**
 * ChamadaCategoria controller.
 *
 */
class ChamadaCategoriaController extends Controller
{

    /**
     * Lists all ChamadaCategoria entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HelpDeskBundle:ChamadaCategoria')->findAll();

        return $this->render('HelpDeskBundle:ChamadaCategoria:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ChamadaCategoria entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ChamadaCategoria();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('chamadacategoria_show', array('id' => $entity->getId())));
        }

        return $this->render('HelpDeskBundle:ChamadaCategoria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ChamadaCategoria entity.
     *
     * @param ChamadaCategoria $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ChamadaCategoria $entity)
    {
        $form = $this->createForm(new ChamadaCategoriaType(), $entity, array(
            'action' => $this->generateUrl('chamadacategoria_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ChamadaCategoria entity.
     *
     */
    public function newAction()
    {
        $entity = new ChamadaCategoria();
        $form   = $this->createCreateForm($entity);

        return $this->render('HelpDeskBundle:ChamadaCategoria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ChamadaCategoria entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:ChamadaCategoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChamadaCategoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HelpDeskBundle:ChamadaCategoria:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ChamadaCategoria entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:ChamadaCategoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChamadaCategoria entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HelpDeskBundle:ChamadaCategoria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ChamadaCategoria entity.
    *
    * @param ChamadaCategoria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ChamadaCategoria $entity)
    {
        $form = $this->createForm(new ChamadaCategoriaType(), $entity, array(
            'action' => $this->generateUrl('chamadacategoria_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ChamadaCategoria entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:ChamadaCategoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChamadaCategoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('chamadacategoria_edit', array('id' => $id)));
        }

        return $this->render('HelpDeskBundle:ChamadaCategoria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ChamadaCategoria entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HelpDeskBundle:ChamadaCategoria')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ChamadaCategoria entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('chamadacategoria'));
    }

    /**
     * Creates a form to delete a ChamadaCategoria entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chamadacategoria_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
