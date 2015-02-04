<?php

/* HelpDeskBundle:Admin:showAdmin.html.twig */
class __TwigTemplate_031aff44324e2e31026e0e73890255a1e501cce0119fdfbc6343a79580a23998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::templateAll.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::templateAll.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col-md-3\">
        <p class=\"lead\">HelpDesk</p>
        <div class=\"list-group\">
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\" class=\"list-group-item\">Início</a>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\" class=\"list-group-item\">Usuários</a>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("sair");
        echo "\" class=\"list-group-item\">Sair</a>
        </div>

        <p class=\"lead\">Chamados</p>
        <div class=\"list-group\">
            <a href=\"#\" class=\"list-group-item\">A Concluir</a>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("todas_chamadas");
        echo "\" class=\"list-group-item\">Ver Todos</a>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("sem_prioridade");
        echo "\" class=\"list-group-item\">Sem Prioridade</a>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("chamadas_em_aberto");
        echo "\" class=\"list-group-item\">Em Aberto</a>
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("chamadas_em_andamento");
        echo "\" class=\"list-group-item\">Em Andamento</a>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("chamadas_finalizadas");
        echo "\" class=\"list-group-item\">Finalizados</a>
            <a href=\"#\" class=\"list-group-item\">Cancelados</a>
        </div>
    </div>
";
    }

    // line 25
    public function block_container($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"col-md-9\">
        <h1>Chamada ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</h1>

        <table class=\"table table-bordered table-striped table-hover\">
            <tbody>
                <tr>
                    <th>Data / Horário</th>
                    <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Solicitante</th>
                    <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Descrição do Problema</th>
                    <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descricaoProblema"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Local do Problema</th>
                    <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaLocal"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Observações</th>
                    <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacoes"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Contato Adicional(Celular)</th>
                    <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contatoAdicional1"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>E-mail Adicional</th>
                    <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contatoAdicional2"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Responsável</th>
                    <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "responsavel"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Status</th>
                        ";
        // line 65
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Em Aberto")) {
            // line 66
            echo "                        <td><h4><label  class=\"label label-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
            echo "</label></h4></td>

                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Em Andamento")) {
            // line 69
            echo "                        <td><h4><label  class=\"label label-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
            echo "</label></h4></td>
                                ";
            // line 71
            echo "
                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Concluída")) {
            // line 73
            echo "                        <td><h4><label  class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
            echo "</label></h4></td>

                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Cancelada")) {
            // line 76
            echo "                        <td><h4><label  class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
            echo "</label></h4></td>
                            ";
        }
        // line 78
        echo "                </tr>
                <tr>
                    <th>Prioridade</th>
                        ";
        // line 81
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaNivel") == "Baixa")) {
            // line 82
            echo "                        <td><h4><label  class=\"label label-success\">Baixa</label></h4></td>

                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaNivel") == "Media")) {
            // line 85
            echo "                        <td><h4><label  class=\"label label-primary\">Média</label></h4></td>

                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaNivel") == "Alta")) {
            // line 88
            echo "                        <td><h4><label  class=\"label label-warning\">Alta</label></h4></td>

                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaNivel") == "Critica")) {
            // line 91
            echo "                        <td><h4><label  class=\"label label-danger\">Crítica</label></h4></td>

                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaNivel") == "")) {
            // line 94
            echo "                        <td><h4><label  class=\"label label-default\">Não Definida</label></h4></td>
                    ";
        }
        // line 96
        echo "                </tr>

            </tbody>
        </table>
        <a class=\"btn btn-success\" href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("finalizar_chamada", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">Finalizar</a>

    </div>
";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Admin:showAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 100,  212 => 96,  208 => 94,  203 => 91,  198 => 88,  193 => 85,  188 => 82,  186 => 81,  181 => 78,  175 => 76,  168 => 73,  164 => 71,  159 => 69,  152 => 66,  150 => 65,  143 => 61,  136 => 57,  129 => 53,  122 => 49,  115 => 45,  108 => 41,  101 => 37,  94 => 33,  85 => 27,  82 => 26,  79 => 25,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  45 => 9,  41 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
