<?php

namespace Icea\CEA478\HelpDeskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Icea\CEA478\HelpDeskBundle\Entity\Usuario;

class LoginController extends Controller {

    public function loginAction() {
        $session = $this->getRequest()->getSession();
        if ($session->has('user')) {
            return $this->redirect($this->generateUrl('home'), 302);
        }
        return $this->render('HelpDeskBundle:Login:login.html.twig', array(
                    'data' => new \DateTime,
                    'erro' => $session->get('erro')
                        // ...
        ));
     
        
    }

    public function login_checkAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();

        if ($request->getMethod() == 'POST') {
            $username = $request->get('username');
            $password = sha1($request->get('password'));

            $em = $this->getDoctrine()->getEntityManager();
            $repositorio = $em->getRepository('HelpDeskBundle:Usuario');



            $user = $repositorio->findOneBy(array('username' => $username, 'password' => $password));


            if ($user) {
                $usuario = new Usuario($user->getId(),$user->getNome(),$user->getUsername(),$user->getTelefone(),$user->getUsuarioClasse());
                $session->start();
                $session->set('user', $usuario);
                return $this->redirect($this->generateUrl('home'), 302);
            }
            $session->set('erro', 'Credenciais inválidas!');
            return $this->redirect($this->generateUrl('login'), 302);
        }
    }

    public function sairAction() {
        $session = $this->getRequest()->getSession();
        $session->remove('user');
        $session->clear();
        return $this->redirect($this->generateUrl('login'), 302);
    }

}
