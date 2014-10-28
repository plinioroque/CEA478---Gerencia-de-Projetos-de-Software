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

  

}
