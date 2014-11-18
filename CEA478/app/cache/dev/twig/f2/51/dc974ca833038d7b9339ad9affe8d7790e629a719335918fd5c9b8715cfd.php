<?php

/* HelpDeskBundle:Chamadas:show.html.twig */
class __TwigTemplate_f251dc974ca833038d7b9339ad9affe8d7790e629a719335918fd5c9b8715cfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::templateAll.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('container', $context, $blocks);
    }

    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "        <h1>Chamada ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</h1>

        <table class=\"table table-bordered table-striped table-hover\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td width=\"80%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Data / Horário</th>
                    <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Solicitante</th>
                    <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Descrição do Problema</th>
                    <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descricaoProblema"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Local do Problema</th>
                    <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaLocal"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Observações</th>
                    <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacoes"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Contato Adicional(Celular)</th>
                    <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contatoAdicional1"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>E-mail Adicional</th>
                    <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contatoAdicional2"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Responsável</th>
                    <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "responsavel"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Status</th>
                        ";
        // line 47
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Em Aberto")) {
            // line 48
            echo "                        <td><h4><label  class=\"label label-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
            echo "</label></h4></td>

                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Em Andamento")) {
            // line 51
            echo "                        <td><h4><label  class=\"label label-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
            echo "</label></h4></td>
                                ";
            // line 53
            echo "
                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Concluída")) {
            // line 55
            echo "                        <td><h4><label  class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
            echo "</label></h4></td>

                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Cancelada")) {
            // line 58
            echo "                        <td><h4><label  class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
            echo "</label></h4></td>
                            ";
        }
        // line 60
        echo "                </tr>
                <tr>
                    <th>Prioridade</th>
                        ";
        // line 63
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaNivel") == "Baixa")) {
            // line 64
            echo "                        <td><h4><label  class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaNivel"), "html", null, true);
            echo "</label></h4></td>

                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaNivel") == "Média")) {
            // line 67
            echo "                        <td><h4><label  class=\"label label-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaNivel"), "html", null, true);
            echo "</label></h4></td>

                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaNivel") == "Alta")) {
            // line 70
            echo "                        <td><h4><label  class=\"label label-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaNivel"), "html", null, true);
            echo "</label></h4></td>

                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaNivel") == "Crítica")) {
            // line 73
            echo "                        <td><h4><label  class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaNivel"), "html", null, true);
            echo "</label></h4></td>

                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaNivel") == "")) {
            // line 76
            echo "                        <td><h4><label  class=\"label label-default\">Não Definida</label></h4></td>
                            ";
        }
        // line 78
        echo "                </tr>

            </tbody>
        </table>



        <a class=\"btn btn-danger\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">Delete</a>
        <br><br>
        <a class=\"btn btn-primary\" href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("chamadas");
        echo "\">
            Back to the list
        </a>
    ";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Chamadas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 87,  190 => 85,  181 => 78,  177 => 76,  170 => 73,  163 => 70,  156 => 67,  149 => 64,  147 => 63,  142 => 60,  136 => 58,  129 => 55,  125 => 53,  120 => 51,  113 => 48,  111 => 47,  104 => 43,  97 => 39,  90 => 35,  83 => 31,  76 => 27,  69 => 23,  62 => 19,  55 => 15,  48 => 11,  38 => 5,  32 => 4,  29 => 3,);
    }
}
