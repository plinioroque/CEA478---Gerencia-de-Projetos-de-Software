<?php

namespace Icea\CEA478\HelpDeskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Icea\CEA478\HelpDeskBundle\Entity\Chamadas;
use Icea\CEA478\HelpDeskBundle\Form\ChamadasType;

class ClienteController extends Controller {

    public function homeAction($userId) {
        /**
         * TESTE TEMPORARIO
         */
        $em = $this->getDoctrine()->getManager();

        $usuario = $em->getRepository('HelpDeskBundle:Usuario')->find($userId);
        $chamadas = $em->getRepository('HelpDeskBundle:Chamadas')->findBy(array('cliente' => $usuario->getId()));

        return $this->render('HelpDeskBundle:Cliente:home.html.twig', array(
                    'usuario' => $usuario,
                    'chamadas' => $chamadas,
                    'data' => new \DateTime
        ));
    }

    public function homeAdminAction($userId) {
        /**
         * TESTE TEMPORARIO
         */
        $em = $this->getDoctrine()->getManager();

        $usuario = $em->getRepository('HelpDeskBundle:Usuario')->find($userId);
        $chamadas = $em->getRepository('HelpDeskBundle:Chamadas')->findBy(array('cliente' => $usuario->getId()));

        return $this->render('HelpDeskBundle:Cliente:homeAdmin.html.twig', array(
                    'usuario' => $usuario,
                    'chamadas' => $chamadas,
                    'data' => new \DateTime
        ));
    }

    public function abrirChamadaAction($userId) {
        $entity = new Chamadas();


        $emCliente = $this->getDoctrine()->getManager();
        $entityCliente = $emCliente->getRepository('HelpDeskBundle:Usuario')->find($userId);

        $form = $this->createCreateForm($entity);

        return $this->render('HelpDeskBundle:Cliente:abrirChamada.html.twig', array(
                    'entity' => $entity,
                    'cliente' => $entityCliente,
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

    public function minhasChamadasAction($userId) {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('HelpDeskBundle:Usuario')->find($userId);
        $entities = $em->getRepository('HelpDeskBundle:Chamadas')->findBy(array('cliente' => $cliente->getId()));

        return $this->render('HelpDeskBundle:Cliente:minhasChamadas.html.twig', array(
                    'usuario' => $cliente,
                    'entities' => $entities,
                    'data' => new \DateTime
        ));
    }

    public function todasChamadasAction($userId) {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('HelpDeskBundle:Usuario')->find($userId);
        $entities = $em->getRepository('HelpDeskBundle:Chamadas')->findAll();

        return $this->render('HelpDeskBundle:Cliente:todasChamadas.html.twig', array(
                    'usuario' => $cliente,
                    'entities' => $entities,
                    'data' => new \DateTime
        ));
    }

    public function todasChamadasAdminAction($userId) {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('HelpDeskBundle:Usuario')->find($userId);
        $entities = $em->getRepository('HelpDeskBundle:Chamadas')->findAll();

        return $this->render('HelpDeskBundle:Cliente:todasChamadasAdmin.html.twig', array(
                    'usuario' => $cliente,
                    'entities' => $entities,
                    'data' => new \DateTime
        ));
    }

    public function emAbertoAction($userId) {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('HelpDeskBundle:Usuario')->find($userId);
        $status = $em->getRepository("HelpDeskBundle:ChamadaStatus")->find(1);
        $entities = $em->getRepository('HelpDeskBundle:Chamadas')->findBy(array('chamadaStatus' => $status));

        return $this->render('HelpDeskBundle:Chamadas:emAberto.html.twig', array(
                    'usuario' => $cliente,
                    'entities' => $entities,
                    'data' => new \DateTime
        ));
    }
    
    public function emAndamentoAction($userId) {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('HelpDeskBundle:Usuario')->find($userId);
        $status = $em->getRepository("HelpDeskBundle:ChamadaStatus")->find(2);
        $entities = $em->getRepository('HelpDeskBundle:Chamadas')->findBy(array('chamadaStatus' => $status));

        return $this->render('HelpDeskBundle:Chamadas:emAndamento.html.twig', array(
                    'usuario' => $cliente,
                    'entities' => $entities,
                    'data' => new \DateTime
        ));
    }
    
    public function finalizadasAction($userId) {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('HelpDeskBundle:Usuario')->find($userId);
        $status = $em->getRepository("HelpDeskBundle:ChamadaStatus")->find(3);
        $entities = $em->getRepository('HelpDeskBundle:Chamadas')->findBy(array('chamadaStatus' => $status));

        return $this->render('HelpDeskBundle:Chamadas:finalizadas.html.twig', array(
                    'usuario' => $cliente,
                    'entities' => $entities,
                    'data' => new \DateTime
        ));
    }
    
    public function semPrioridadeAction($userId) {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('HelpDeskBundle:Usuario')->find($userId);
//        $status = $em->getRepository("HelpDeskBundle:ChamadaNivel")->find();
        $entities = $em->getRepository('HelpDeskBundle:Chamadas')->findBy(array('chamadaNivel' => null));

        return $this->render('HelpDeskBundle:Chamadas:semPrioridade.html.twig', array(
                    'usuario' => $cliente,
                    'entities' => $entities,
                    'data' => new \DateTime
        ));
    }

}
