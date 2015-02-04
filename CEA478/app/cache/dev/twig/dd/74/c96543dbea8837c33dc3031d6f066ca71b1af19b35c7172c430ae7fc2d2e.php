<?php

/* HelpDeskBundle:Chamadas:finalizadas.html.twig */
class __TwigTemplate_dd74c96543dbea8837c33dc3031d6f066ca71b1af19b35c7172c430ae7fc2d2e extends Twig_Template
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
        // line 82
        echo "
";
    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "
        <div class=\"row\">

            <div class=\"col-md-3\">
               <p class=\"lead\">HelpDesk</p>
                <div class=\"list-group\">
                    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_home", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Início</a>
                    <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"list-group-item\">Sair</a>
                </div>
                
                <p class=\"lead\">Chamadas</p>
                <div class=\"list-group\">
                    <a href=\"#\" class=\"list-group-item\">Minhas Chamadas</a>
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todas_chamadas_admin", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Ver Todas Chamadas</a>
                    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sem_prioridade", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Sem Prioridade</a>
                    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_em_aberto", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Em Aberto</a>
                    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_em_andamento", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Em Andamento</a>
                    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_finalizadas", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Finalizadas</a>
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"list-group-item\">Sair</a>
                </div>
            </div>


            <div class=\"col-md-9\">
                <p class=\"lead\">Concluídas</p>
                
                <table class=\"table table-responsive table-hover\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Data / Horário</th>
                            <th>Descriçao do Problema</th>
                            <th>Observações</th>
                            <th>Solicitante</th>
                            <th>Status da Chamada</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody align=\"center\">
                        ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 45
            echo "                            <tr>
                                <td width=\"5%\"><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>

                                <td width=\"15%\">";
            // line 48
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData"), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>

                                <td width=\"20%\" align=\"left\">";
            // line 50
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descricaoProblema"), 0, 25), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b>...</b></a></td>

                                <td width=\"20%\" align=\"left\">";
            // line 52
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacoes"), 0, 20), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b>...</b></a></td>

                                <td width=\"15%\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente"), "html", null, true);
            echo "</td>

                                ";
            // line 56
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Em Aberto")) {
                // line 57
                echo "                                    <td align=\"center\"><label  class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>

                                ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Em Andamento")) {
                // line 60
                echo "                                    <td align=\"center\"><label  class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>
                                        ";
                // line 62
                echo "
                                ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Concluída")) {
                // line 64
                echo "                                    <td align=\"center\"><label  class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>

                                ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Cancelada")) {
                // line 67
                echo "                                    <td align=\"center\"><label  class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>
                                    ";
            }
            // line 69
            echo "
                                <td>
                                    <a class=\"btn btn-default\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Detalhes</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </tbody>
                </table>

                ";
        // line 79
        echo "            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Chamadas:finalizadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 79,  192 => 75,  182 => 71,  178 => 69,  172 => 67,  165 => 64,  161 => 62,  156 => 60,  149 => 57,  147 => 56,  142 => 54,  135 => 52,  128 => 50,  121 => 48,  114 => 46,  111 => 45,  107 => 44,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  54 => 12,  50 => 11,  42 => 5,  39 => 4,  34 => 82,  32 => 4,  29 => 3,);
    }
}
