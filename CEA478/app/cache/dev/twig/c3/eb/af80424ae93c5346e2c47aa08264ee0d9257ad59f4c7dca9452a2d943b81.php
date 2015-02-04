<?php

/* HelpDeskBundle:Admin:emAberto.html.twig */
class __TwigTemplate_c3ebaf80424ae93c5346e2c47aa08264ee0d9257ad59f4c7dca9452a2d943b81 extends Twig_Template
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

    // line 24
    public function block_container($context, array $blocks = array())
    {
        // line 25
        echo "

    <div class=\"col-md-9\">
        <p class=\"lead\">Em Aberto</p>

        <table class=\"table table-responsive table-hover\">
            <thead>
                <tr>
                    <th>Data / Horário</th>
                    <th>Descriçao</th>
                    <th>Observações</th>
                    <th>Solicitante</th>
                    <th></th>
                </tr>
            </thead>
            <tbody align=\"center\">
                ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 42
            echo "                    <tr>

                        <td width=\"15%\">";
            // line 44
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData"), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>

                        <td width=\"20%\" align=\"left\">";
            // line 46
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descricaoProblema"), 0, 25), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b>...</b></a></td>

                        <td width=\"20%\" align=\"left\">";
            // line 48
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacoes"), 0, 20), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><b>...</b></a></td>

                        <td width=\"15%\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente"), "html", null, true);
            echo "</td>

                        <td>
                            <a class=\"btn btn-default\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Detalhes</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </tbody>
        </table>

        ";
        // line 61
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Admin:emAberto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 61,  142 => 57,  132 => 53,  126 => 50,  119 => 48,  112 => 46,  105 => 44,  101 => 42,  97 => 41,  79 => 25,  76 => 24,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  42 => 9,  37 => 7,  32 => 4,  29 => 3,);
    }
}
