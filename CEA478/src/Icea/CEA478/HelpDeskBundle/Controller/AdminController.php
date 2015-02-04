<?php

namespace Icea\CEA478\HelpDeskBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Icea\CEA478\HelpDeskBundle\Entity\Chamadas;
use Icea\CEA478\HelpDeskBundle\Form\ChamadasType;

class AdminController extends Controller{
    
    public function emAbertoAction() {
        $session= $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('HelpDeskBundle:Usuario')->find($session->get('user')->getId());
        $status = $em->getRepository("HelpDeskBundle:ChamadaStatus")->find(1);
        $entities = $em->getRepository('HelpDeskBundle:Chamadas')->findBy(array('chamadaStatus' => $status));

        return $this->render('HelpDeskBundle:Admin:emAberto.html.twig', array(
                    'usuario' => $cliente,
                    'entities' => $entities,
                    'data' => new \DateTime
        ));
    }

    public function emAndamentoAction() {
        $session= $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('HelpDeskBundle:Usuario')->find($session->get('user')->getId());
        $status = $em->getRepository("HelpDeskBundle:ChamadaStatus")->find(2);
        $entities = $em->getRepository('HelpDeskBundle:Chamadas')->findBy(array('chamadaStatus' => $status));

        return $this->render('HelpDeskBundle:Admin:emAndamento.html.twig', array(
                    'usuario' => $cliente,
                    'entities' => $entities,
                    'data' => new \DateTime
        ));
    }

    public function finalizadasAction() {
        $session= $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('HelpDeskBundle:Usuario')->find($session->get('user')->getId());
        $status = $em->getRepository("HelpDeskBundle:ChamadaStatus")->find(3);
        $entities = $em->getRepository('HelpDeskBundle:Chamadas')->findBy(array('chamadaStatus' => $status));

        return $this->render('HelpDeskBundle:Admin:finalizadas.html.twig', array(
                    'usuario' => $cliente,
                    'entities' => $entities,
                    'data' => new \DateTime
        ));
    }

    public function semPrioridadeAction() {
        $session= $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('HelpDeskBundle:Usuario')->find($session->get('user')->getId());
        
        $entities = $em->getRepository('HelpDeskBundle:Chamadas')->findBy(array('chamadaNivel' => null));

        return $this->render('HelpDeskBundle:Admin:semPrioridade.html.twig', array(
                    'usuario' => $cliente,
                    'entities' => $entities,
                    'data' => new \DateTime
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
}
