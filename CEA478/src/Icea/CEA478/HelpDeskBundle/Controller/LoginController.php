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
                if(strcmp($user->getUsuarioClasse()->getDescricao(),"Administrador")==0){
                    return $this->redirect('/helpdesk/'.$user->getId().'/homeAdmin/', 302);
                }

                return $this->redirect('/helpdesk/'.$user->getId().'/home/', 302);
            }
        }
        return $this->render('HelpDeskBundle:Login:login.html.twig', array(
                    // ...
                    'erro' => 'Credenciais inválidas!',
                    'data' => new \DateTime
        ));
    }

}
