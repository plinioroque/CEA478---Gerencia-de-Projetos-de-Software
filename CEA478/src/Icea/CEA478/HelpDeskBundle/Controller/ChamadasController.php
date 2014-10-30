<?php

namespace Icea\CEA478\HelpDeskBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Icea\CEA478\HelpDeskBundle\Entity\Chamadas;
use Icea\CEA478\HelpDeskBundle\Form\ChamadasType;

/**
 * Chamadas controller.
 *
 */
class ChamadasController extends Controller {

    /**
     * Lists all Chamadas entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HelpDeskBundle:Chamadas')->findAll();

        return $this->render('HelpDeskBundle:Chamadas:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Chamadas entity.
     *
     */
    public function createAction(Request $request) {
        //inicia uma chamadaStatus
        $emAux = $this->getDoctrine()->getManager();
        
        $status = $emAux->getRepository('HelpDeskBundle:ChamadaStatus')->find(1);
        $cliente = $emAux->getRepository('HelpDeskBundle:Usuario')->find(1);
        
        $entity = new Chamadas();
        $entity->setChamadaStatus($status);
        $entity->setHoraData(new \DateTime);
        $entity->setCliente($cliente);

        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $message = \Swift_Message::newInstance()
                    ->setSubject('Confirmação de abertura de Chamado')
                    ->setFrom('cea478.2914.2@gmail.com')
                    ->setTo($entity->getCliente()->getUsername())
                    ->setBody('Você enviou um chamado ao NTI com sucesso! Segue os dados do serviço solicitad:'
                    . 'ID:' . $entity->getId()  . 'Descrição: ' . $entity->getDescricaoProblema()
                    . 'Categoria: ' . $entity->getChamadaCategoria() .'Local: ' . $entity->getChamadaLocal()
                    . 'Data/Horario: ' . $entity->getHoraData()->format('d-m-Y H:i:s') . '')
            ;
            $this->get('mailer')->send($message);
            
            $chamadas = $emAux->getRepository('HelpDeskBundle:Chamadas')->findBy(array('cliente' => $cliente->getId()));
            return $this->render('HelpDeskBundle:Cliente:home.html.twig', array(
            'usuario' => $cliente,
            'chamadas' => $chamadas,
            'data' => new \DateTime )
            );
        }

        return $this->render('HelpDeskBundle:Cliente:abrirChamada.html.twig', array(
                    'entity' => $entity,
                    'cliente' => $cliente,
                    'form' => $form->createView(),
                    'data' => new \DateTime
        ));
    }

    /**
     * Creates a form to create a Chamadas entity.
     *
     * @param Chamadas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Chamadas $entity) {
        $form = $this->createForm(new ChamadasType(), $entity, array(
            'action' => $this->generateUrl('chamadas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Chamadas entity.
     *
     */
    public function newAction() {
        $entity = new Chamadas();
        $form = $this->createCreateForm($entity);

        return $this->render('HelpDeskBundle:Chamadas:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Chamadas entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:Chamadas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chamadas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HelpDeskBundle:Chamadas:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Chamadas entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:Chamadas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chamadas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HelpDeskBundle:Chamadas:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Chamadas entity.
     *
     * @param Chamadas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Chamadas $entity) {
        $form = $this->createForm(new ChamadasType(), $entity, array(
            'action' => $this->generateUrl('chamadas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Chamadas entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelpDeskBundle:Chamadas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chamadas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('chamadas_edit', array('id' => $id)));
        }

        return $this->render('HelpDeskBundle:Chamadas:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Chamadas entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HelpDeskBundle:Chamadas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Chamadas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('chamadas'));
    }

    /**
     * Creates a form to delete a Chamadas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('chamadas_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
