<?php

/* HelpDeskBundle:BuscaChamados:busca.html.twig */
class __TwigTemplate_dd4c7d7dd4516532a8e41444e65a58e513e2943fff5c590d4e69dfe8027f0dba extends Twig_Template
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
        // line 114
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_home", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Início</a>
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abrir_chamada", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Abrir Chamada</a>
                    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("minhas_chamadas", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Minhas Chamadas</a>
                    <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todas_chamadas", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Ver Todas Chamadas</a>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"list-group-item\">Sair</a>
                </div>
            </div>


            <div class=\"col-md-9\">
                <p class=\"lead\">Todas Chamadas</p>

                <div class=\"col-md-12\">
                    <form class=\"form form-control-static\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("busca", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" method=\"post\">
                        <div name=\"filtro\" class=\"panel\">
                            <div class=\"col-md-3\">
                                Opções de filtro:
                                <select id=\"tipoFiltro\" name=\"tipoFiltro\" class=\"form-control\" >
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
                                <input type=\"text\" class=\"form-control input-xlarge\" name=\"valorFiltro\" id=\"valorFiltro\"/>
                            </div>
                            <div class=\"col-md-3\">
                                <br />
                                <button type=\"submit\" id=\"filtro_submit\" name=\"filtro_submit\" class=\"btn btn-default\">Filtrar</button>  
                            </div>
                        </div>
                    </form>
                </div>

                ";
        // line 53
        if (((isset($context["erro"]) ? $context["erro"] : $this->getContext($context, "erro")) == "")) {
            // line 54
            echo "                    <table class=\"table table-bordered table-striped table-hover\">
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
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 68
                echo "                                <tr>
                                    <td width=\"5%\"><a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "</a></td>

                                    <td width=\"15%\">";
                // line 71
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData"), "d-m-Y H:i:s"), "html", null, true);
                }
                echo "</td>

                                    <td width=\"20%\" align=\"left\">";
                // line 73
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descricaoProblema"), 0, 25), "html", null, true);
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\"><b>...</b></a></td>

                                    <td width=\"20%\" align=\"left\">";
                // line 75
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacoes"), 0, 20), "html", null, true);
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\"><b>...</b></a></td>

                                    <td width=\"15%\">";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente"), "html", null, true);
                echo "</td>

                                    ";
                // line 79
                if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Em Aberto")) {
                    // line 80
                    echo "                                        <td align=\"center\"><label  class=\"label label-primary\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                    echo "</label></td>

                                    ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Em Andamento")) {
                    // line 83
                    echo "                                        <td align=\"center\"><label  class=\"label label-warning\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                    echo "</label></td>
                                            ";
                    // line 85
                    echo "
                                    ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Concluída")) {
                    // line 87
                    echo "                                        <td align=\"center\"><label  class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                    echo "</label></td>

                                    ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Cancelada")) {
                    // line 90
                    echo "                                        <td align=\"center\"><label  class=\"label label-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                    echo "</label></td>
                                        ";
                }
                // line 92
                echo "
                                    <td>
                                        <a class=\"btn btn-default\" href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">Detalhes</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                        </tbody>
                    </table>
                ";
        } else {
            // line 101
            echo "                    <div id=\"erro\" class=\"alert\" >
                        <p class=\"lead label label-danger\">
                            ";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["erro"]) ? $context["erro"] : $this->getContext($context, "erro")), "html", null, true);
            echo "
                        </p>
                        <br />
                        <p class=\"lead label label-danger\">
                            ";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["solucao"]) ? $context["solucao"] : $this->getContext($context, "solucao")), "html", null, true);
            echo "
                        </p>
                    </div>
                ";
        }
        // line 111
        echo "            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:BuscaChamados:busca.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 107,  212 => 98,  202 => 94,  198 => 92,  192 => 90,  185 => 87,  181 => 85,  167 => 79,  155 => 75,  148 => 73,  134 => 69,  127 => 67,  110 => 53,  58 => 13,  34 => 114,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 80,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 111,  230 => 82,  227 => 81,  224 => 71,  221 => 103,  219 => 76,  217 => 101,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 24,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 14,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 68,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 11,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 83,  173 => 65,  168 => 72,  164 => 59,  162 => 77,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 71,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 54,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 12,  51 => 14,  48 => 13,  45 => 17,  42 => 5,  39 => 4,  36 => 5,  33 => 4,  30 => 7,);
    }
}
