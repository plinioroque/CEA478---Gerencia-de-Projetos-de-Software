<?php

/* HelpDeskBundle:Admin:todasChamadasAdmin.html.twig */
class __TwigTemplate_79ef75caafd3c7e9e7507a6071e7c9038a85caaf178235ed64c3540412465300 extends Twig_Template
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
            <a href=\"#\" class=\"list-group-item\">Usuários</a>
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
        <p class=\"lead\">Todos Chamados</p>

        <div class=\"col-md-12\">
            <form class=\"form form-control-static\" action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("busca");
        echo "\" method=\"post\">
                <div name=\"filtro\" class=\"panel\">
                    <div class=\"col-md-3\">
                        Opções de filtro:
                        <select id=\"tipoFiltro\" name=\"tipoFiltro\" class=\"form-control\" required=\"required\" >
                            <option value=\"0\"></option>
                            <option value=\"1\">A partir de</option>
                            <option value=\"2\">Antes de</option>
                            <option value=\"3\">Dia</option>
                            <option value=\"4\">Categoria</option>
                            <option value=\"5\">Local</option>
                            <option value=\"6\">Prioridade</option>
                            <option value=\"7\">Responsável</option>
                            <option value=\"8\">Solicitante</option>
                            <option value=\"9\">Status</option>
                        </select>
                    </div>
                    <div class=\"col-lg-6\">
                        Informe os parametros do filtro que deseja:
                        <input type=\"text\" class=\"form-control input-xlarge\" name=\"valorFiltro\" id=\"valorFiltro\" required=\"required\"/>
                    </div>
                    <div class=\"col-md-3\">
                        <br />
                        <button type=\"submit\" id=\"filtro_submit\" name=\"filtro_submit\" class=\"btn btn-default\">Filtrar</button>  
                    </div>
                </div>
            </form>
        </div>
        <table class=\"table table-responsive table-hover\">
            <thead>
                <tr>
                    <th>Data / Horário</th>
                    <th>Descriçao</th>
                    <th>Observações</th>
                    <th>Solicitante</th>
                    <th>Status da Chamada</th>
                    <th></th>
                </tr>
            </thead>
            <tbody align=\"center\">
                ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 71
            echo "                    <tr>
                        <td width=\"15%\">";
            // line 72
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData"), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>

                        <td width=\"20%\" align=\"left\">";
            // line 74
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descricaoProblema"), 0, 25), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b>...</b></a></td>

                        <td width=\"20%\" align=\"left\">";
            // line 76
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacoes"), 0, 20), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b>...</b></a></td>

                        <td width=\"15%\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente"), "html", null, true);
            echo "</td>

                        ";
            // line 80
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Em Aberto")) {
                // line 81
                echo "                            <td align=\"center\"><label  class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>

                        ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Em Andamento")) {
                // line 84
                echo "                            <td align=\"center\"><label  class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>
                                ";
                // line 86
                echo "
                        ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Concluída")) {
                // line 88
                echo "                            <td align=\"center\"><label  class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>

                        ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Cancelada")) {
                // line 91
                echo "                            <td align=\"center\"><label  class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>
                            ";
            }
            // line 93
            echo "
                        <td>
                            <a class=\"btn btn-default\" href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Detalhes</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "            </tbody>
        </table>

        ";
        // line 103
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Admin:todasChamadasAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 103,  206 => 99,  196 => 95,  192 => 93,  186 => 91,  179 => 88,  175 => 86,  170 => 84,  163 => 81,  161 => 80,  156 => 78,  149 => 76,  142 => 74,  135 => 72,  132 => 71,  128 => 70,  85 => 30,  79 => 26,  76 => 25,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  42 => 9,  37 => 7,  32 => 4,  29 => 3,);
    }
}
