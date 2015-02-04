<?php

namespace Icea\CEA478\HelpDeskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Icea\CEA478\HelpDeskBundle\Entity\Chamadas;
use Icea\CEA478\HelpDeskBundle\Form\ChamadasType;

class ClienteController extends Controller {

    public function homeAction() {
        $session = $this->getRequest()->getSession();
        if ($session->has('user')) {
            $user = $session->get('user');
            $em = $this->getDoctrine()->getManager();
            $chamadas = $em->getRepository('HelpDeskBundle:Chamadas')->findBy(array('cliente' => $user->getID()));

            if($session->get('user')->getRoles()=='ROLE_ADMIN'){
                return $this->render('HelpDeskBundle:Admin:home.html.twig', array(
                            'usuario' => $user,
                            'chamadas' => $chamadas,
                            'data' => new \DateTime
                ));
            }
            return $this->render('HelpDeskBundle:Cliente:home.html.twig', array(
                        'usuario' => $user,
                        'chamadas' => $chamadas,
                        'data' => new \DateTime
            ));
        }
        $session->set('erro', 'Sessão inválida!');
        return $this->redirect($this->generateUrl('login'), 302);
    }

    public function abrirChamadaAction() {
        $session = $this->getRequest()->getSession();
        $entity = new Chamadas();
        $form = $this->createCreateForm($entity);
        
        return $this->render('HelpDeskBundle:Cliente:abrirChamada.html.twig', array(
                    'cliente' => $session->get('user'),
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

    public function minhasChamadasAction() {
        $session= $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('HelpDeskBundle:Usuario')->find($session->get('user')->getId());
        $entities = $em->getRepository('HelpDeskBundle:Chamadas')->findBy(array('cliente' => $cliente));

        return $this->render('HelpDeskBundle:Cliente:minhasChamadas.html.twig', array(
                    'usuario' => $cliente,
                    'entities' => $entities,
                    'data' => new \DateTime
        ));
    }

    public function todasChamadasAction() {
        $session= $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('HelpDeskBundle:Usuario')->find($session->get('user')->getId());
        $entities = $em->getRepository('HelpDeskBundle:Chamadas')->findAll();
        
        if($session->get('user')->getRoles()=='ROLE_ADMIN'){
            return $this->render('HelpDeskBundle:Admin:todasChamadasAdmin.html.twig', array(
                        'usuario' => $cliente,
                        'entities' => $entities,
                        'data' => new \DateTime
            ));
        }
        return $this->render('HelpDeskBundle:Cliente:todasChamadas.html.twig', array(
                    'usuario' => $cliente,
                    'entities' => $entities,
                    'data' => new \DateTime
        ));
    }

}
