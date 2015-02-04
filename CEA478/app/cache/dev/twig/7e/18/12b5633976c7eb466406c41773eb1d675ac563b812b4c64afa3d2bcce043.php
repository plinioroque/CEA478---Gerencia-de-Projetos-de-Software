<?php

/* HelpDeskBundle:Cliente:todasChamadas.html.twig */
class __TwigTemplate_7e1812b5633976c7eb466406c41773eb1d675ac563b812b4c64afa3d2bcce043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::templateAll.html.twig");

        $this->blocks = array(
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
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col-md-9\">
        <p class=\"lead\">Todas Chamadas</p>

        <div class=\"col-md-12\">
            <form class=\"form form-control-static\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("busca");
        echo "\" method=\"post\">
                <div name=\"filtro\" class=\"panel\">
                    <div class=\"col-md-3\">
                        Opções de filtro:
                        <select id=\"tipoFiltro\" name=\"tipoFiltro\" class=\"form-control\" onchange=\"mfiltro(this);\" required=\"required\" >
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
                    <th>Solicitante</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 48
            echo "                    <tr>
                        <td width=\"15%\">";
            // line 49
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData"), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>

                        <td width=\"40%\" align=\"left\">";
            // line 51
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descricaoProblema"), 0, 50), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b>...</b></a></td>

                        <td width=\"15%\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente"), "html", null, true);
            echo "</td>

                        ";
            // line 55
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Em Aberto")) {
                // line 56
                echo "                            <td ><label  class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>

                        ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Em Andamento")) {
                // line 59
                echo "                            <td ><label  class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>
                                ";
                // line 61
                echo "
                        ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Concluída")) {
                // line 63
                echo "                            <td ><label  class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>

                        ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Cancelada")) {
                // line 66
                echo "                            <td <label  class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>
                            ";
            }
            // line 68
            echo "
                        <td>
                            <a class=\"btn btn-default\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Detalhes</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            </tbody>
        </table>

        ";
        // line 78
        echo "    </div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {

            \$(\"#tipoFiltro\").change(function() {
                alert(\$(\"#tipoFiltro option:selected\").text());
            });

        });
        function mfiltro(filtro) {
            alert(\"TESTE\");
            // Altera o valor do input valorFiltro de acordo com a opção escolhida
            if (filtro.options[filtro.selectedIndex].value == 1) {
                alert(\"TESTE\");
                document.getElementById(\"valorFiltro\").value = \"dd-mm-AAAA\";
            }
            switch (filtro.options[filtro.selectedIndex].value) {
                case 1:
                    document.getElementById(\"valorFiltro\").value = \"dd-mm-AAAA\";
                    break;
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Cliente:todasChamadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 78,  150 => 74,  140 => 70,  136 => 68,  130 => 66,  123 => 63,  119 => 61,  114 => 59,  107 => 56,  105 => 55,  100 => 53,  93 => 51,  86 => 49,  83 => 48,  79 => 47,  37 => 8,  31 => 4,  28 => 3,);
    }
}
