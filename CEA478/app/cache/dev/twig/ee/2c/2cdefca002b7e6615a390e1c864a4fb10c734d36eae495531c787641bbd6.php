<?php

/* HelpDeskBundle:Cliente:minhasChamadas.html.twig */
class __TwigTemplate_ee2c2cdefca002b7e6615a390e1c864a4fb10c734d36eae495531c787641bbd6 extends Twig_Template
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
        <p class=\"lead\">Minhas Chamadas</p>
        <table class=\"table table-responsive table-hover\">
            <thead>
                <tr>
                    ";
        // line 10
        echo "                    <th>Data / Horário</th>
                    <th>Descriçao</th>
                    <th>Observações</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody align=\"center\">
                ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "                    <tr>
                        <td width=\"20%\">";
            // line 20
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData"), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>

                        <td width=\"22%\" align=\"left\">";
            // line 22
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descricaoProblema"), 0, 30), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b>...</b></a></td>

                        <td width=\"22%\" align=\"left\">";
            // line 24
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacoes"), 0, 25), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b>...</b></a></td>

                        ";
            // line 26
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Em Aberto")) {
                // line 27
                echo "                            <td width=\"15%\" ><label  class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>

                        ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Em Andamento")) {
                // line 30
                echo "                            <td width=\"15%\" ><label  class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>

                        ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Concluída")) {
                // line 33
                echo "                            <td width=\"15%\" ><label  class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>

                        ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus") == "Cancelada")) {
                // line 36
                echo "                            <td width=\"15%\" ><label  class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chamadaStatus"), "html", null, true);
                echo "</label></td>
                            ";
            }
            // line 38
            echo "
                        <td>
                            <a class=\"btn btn-default\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" alt=\"Detalhes\">Detalhes</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Cliente:minhasChamadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  109 => 40,  105 => 38,  99 => 36,  92 => 33,  85 => 30,  78 => 27,  76 => 26,  69 => 24,  62 => 22,  55 => 20,  52 => 19,  48 => 18,  38 => 10,  31 => 4,  28 => 3,);
    }
}
