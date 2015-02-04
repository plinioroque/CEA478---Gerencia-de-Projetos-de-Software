<?php

namespace Icea\CEA478\HelpDeskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BuscaChamadosController extends Controller {

    public function buscaAction(Request $request) {
        $session = $this->getRequest()->getSession();
        if ($request->getMethod() == 'POST') {
            $tipoFiltro = $request->get('tipoFiltro');
            $valorFiltro = $request->get('valorFiltro');
            $resultado = $this->trataFiltro($tipoFiltro, $valorFiltro);

            if ($session->get('user')->getRoles() == 'ROLE_ADMIN') {
                return $this->render('HelpDeskBundle:BuscaChamados:buscaAdmin.html.twig', array(
                            'entities' => $resultado[0],
                            'erro' => $resultado[1],
                            'solucao' => $resultado[2],
                            'data' => new \DateTime,
                ));
            }
            return $this->render('HelpDeskBundle:BuscaChamados:busca.html.twig', array(
                        'entities' => $resultado[0],
                        'erro' => $resultado[1],
                        'solucao' => $resultado[2],
                        'data' => new \DateTime,
            ));
        }

        return $this->render('HelpDeskBundle:BuscaChamados:busca.html.twig', array(
                    // ...
                    'result' => "",
        ));
    }

    private function trataFiltro($tipoFiltro, $valorFiltro) {

        $em = $this->getDoctrine()->getManager();

        if (strcmp($tipoFiltro, "0") == 0) {
            return array("", "Nenhum tipo de filtro selecionado!", "Tente novamente.");
        } elseif (strcmp($tipoFiltro, "1") == 0) {
            if (substr_count($valorFiltro, "-") == 2 && strlen($valorFiltro) == 10) {
                $dia = substr($valorFiltro, 0, 2);
                $mes = substr($valorFiltro, 3, 2);
                $ano = substr($valorFiltro, 6);

                if ($dia <= 31 && $mes <= 12) {
                    $todasChamadas = $em->getRepository("HelpDeskBundle:Chamadas")->findAll();
                    $result = array();
                    foreach ($todasChamadas as $chamada) {
                        $dataAtual = $valorFiltro;
                        $dataChamada = $chamada->getHoraData()->format("d-m-Y");
                        if ($this->diferenca_dias($dataAtual, $dataChamada) >= 0) {
                            $result[] = $chamada;
                        }
                    }
                    return array($result, "", "");
                }
            }
            return array("", "Valor informado em formato inválido!", "Utilize o seguinte formato: DD-MM-AAAA. Exemplo: 07-03-2009");
        } elseif (strcmp($tipoFiltro, "2") == 0) {
            if (substr_count($valorFiltro, "-") == 2 && strlen($valorFiltro) == 10) {
                $dia = substr($valorFiltro, 0, 2);
                $mes = substr($valorFiltro, 3, 2);
                $ano = substr($valorFiltro, 6);

                if ($dia < 31 && $mes < 12) {
                    $todasChamadas = $em->getRepository("HelpDeskBundle:Chamadas")->findAll();
                    $result = array();
                    foreach ($todasChamadas as $chamada) {
                        $dataAtual = $valorFiltro;
                        $dataChamada = $chamada->getHoraData()->format("d-m-Y");
                        if ($this->diferenca_dias($dataAtual, $dataChamada) < 0) {
                            $result[] = $chamada;
                        }
                    }
                    return array($result, "", "");
                }
            }
            return array("", "Valor informado em formato inválido!", "Utilize o seguinte formato: DD-MM-AAAA. Exemplo: 07-03-2009");
        } elseif (strcmp($tipoFiltro, "3") == 0) {
            if (substr_count($valorFiltro, "-") == 2 && strlen($valorFiltro) == 10) {
                $dia = substr($valorFiltro, 0, 2);
                $mes = substr($valorFiltro, 3, 2);
                $ano = substr($valorFiltro, 6);

                if ($dia < 31 && $mes < 12) {
                    $todasChamadas = $em->getRepository("HelpDeskBundle:Chamadas")->findAll();
                    $result = array();
                    foreach ($todasChamadas as $chamada) {
                        $dataAtual = $valorFiltro;
                        $dataChamada = $chamada->getHoraData()->format("d-m-Y");
                        if ($this->diferenca_dias($dataAtual, $dataChamada) == 0) {
                            $result[] = $chamada;
                        }
                    }
                    return array($result, "", "");
                }
            }
            return array("", "Valor informado em formato inválido!", "Utilize o seguinte formato: DD-MM-AAAA. Exemplo: 07-03-2009");
        } elseif (strcmp($tipoFiltro, "4") == 0) {
            $idCategoria = $em->getRepository("HelpDeskBundle:ChamadaCategoria")->findBy(array('descricao' => $valorFiltro));
            if ($idCategoria != []) {
                $result = $em->getRepository("HelpDeskBundle:Chamadas")->findBy(array('chamadaCategoria' => $idCategoria[0]));
                if ($result == []) {
                    return array("", "Nenhum Resultado Encontrado!", "Tente novamente.");
                }
                return array($result, "", "");
            }
            return array("", "Valor informado inválido!", "Utilize uma das seguintes opções: Hardware, Software, Rede, Multimídia, Outro");
        } elseif (strcmp($tipoFiltro, "5") == 0) {
            if (strlen($valorFiltro) == 4) {
                $idLocal = $em->getRepository("HelpDeskBundle:ChamadaLocal")->findBy(array('descricao' => $valorFiltro));
                $result = $em->getRepository("HelpDeskBundle:Chamadas")->findBy(array('chamadaLocal' => $idLocal[0]));
                if ($result == []) {
                    return array("", "Nenhum Resultado Encontrado!", "Tente novamente. Exemplos: E204, C201, G403 ");
                }
                return array($result, "", "");
            }
            return array("", "Valor informado inválido!", "Utilize o formato de nomeação das salas. Exemplos: E204, C201, G403");
        } elseif (strcmp($tipoFiltro, "6") == 0) {
            $idPrioridade = $em->getRepository("HelpDeskBundle:ChamadaNivel")->findBy(array('descricao' => $valorFiltro));
            if (!$idPrioridade == []) {
                $result = $em->getRepository("HelpDeskBundle:Chamadas")->findBy(array('chamadaNivel' => $idPrioridade[0]));
                if ($result == []) {
                    return array("", "Nenhum Resultado Encontrado!", "Tente novamente.");
                }
                return array($result, "", "");
            }
            return array("", "Valor informado inválido!", "Utilize uma das seguintes opções: Não Definido, Baixa, Média, Alta, Crítica ");
        } elseif (strcmp($tipoFiltro, "7") == 0) {
            $idPrioridade = $em->getRepository("HelpDeskBundle:Usuario")->findBy(array('nome' => $valorFiltro));
            if (!$idPrioridade == []) {
                $result = $em->getRepository("HelpDeskBundle:Chamadas")->findBy(array('responsavel' => $idPrioridade[0]));
                if ($result == []) {
                    return array("", "Nenhum Resultado Encontrado!", "Tente novamente.");
                }
                return array($result, "", "");
            }
            return array("", "Valor informado inválido! O nome informado não corresponde a um funcionário do NTI.", "Informe o nome completo por favor.");
        } elseif (strcmp($tipoFiltro, "8") == 0) {
            $idPrioridade = $em->getRepository("HelpDeskBundle:Usuario")->findBy(array('nome' => $valorFiltro));
            if (!$idPrioridade == []) {
                $result = $em->getRepository("HelpDeskBundle:Chamadas")->findBy(array('cliente' => $idPrioridade[0]));
                if ($result == []) {
                    return array("", "Nenhum Resultado Encontrado!", "Tente novamente.");
                }
                return array($result, "", "");
            }
            return array("", "Valor informado inválido! O nome informado não corresponde a um usuário do sistema.", "Informe o nome completo por favor.");
        } elseif (strcmp($tipoFiltro, "9") == 0) {
            $idPrioridade = $em->getRepository("HelpDeskBundle:ChamadaStatus")->findBy(array('descricao' => $valorFiltro));
            if (!$idPrioridade == []) {
                $result = $em->getRepository("HelpDeskBundle:Chamadas")->findBy(array('chamadaStatus' => $idPrioridade[0]));
                if ($result == []) {
                    return array("", "Nenhum Resultado Encontrado!", "Tente novamente.");
                }
                return array($result, "", "");
            }
            return array("", "Valor informado inválido!", "Utilize uma das seguintes opções: Em Aberto, Em Andamento, Concluída, Cancelada.");
        }
    }

    private function diferenca_dias($inicial, $final) {
        $inicial = strtotime($inicial);
        $final = strtotime($final);

        return ($final - $inicial) / 86400;
    }

}
