<?php

namespace Icea\CEA478\HelpDeskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller {

    public function loginAction() {
        return $this->render('HelpDeskBundle:Login:login.html.twig', array(
                    'data' => new \DateTime,
                    'erro' => ""
                        // ...
        ));
    }

    public function login_checkAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $username = $request->get('username');
            $password = $request->get('password');

            $em = $this->getDoctrine()->getEntityManager();
            $repositorio = $em->getRepository('HelpDeskBundle:Usuario');



            $user = $repositorio->findOneBy(array('username' => $username, 'password' => $password));


            if ($user) {
                $chamadas = $em->getRepository('HelpDeskBundle:Chamadas')->findBy(array('cliente' => $user->getId()));
                return $this->render('HelpDeskBundle:Cliente:home.html.twig', array(
                            // ...
                            'usuario' => $user,
                            'chamadas' => $chamadas,
                            'data' => new \DateTime
                ));
            }
        }
        return $this->render('HelpDeskBundle:Login:login.html.twig', array(
                    // ...
                    'erro' => 'Credenciais inválidas!',
                    'data' => new \DateTime
        ));
    }

}
