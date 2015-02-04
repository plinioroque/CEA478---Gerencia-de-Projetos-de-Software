<?php

/* HelpDeskBundle:Admin:definirPrioridade.html.twig */
class __TwigTemplate_3efcf957ad83205d6ddaf7f4c41c6ed896f103319d03500962ffa07a4e71d955 extends Twig_Template
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

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"col-md-3\">
        <p class=\"lead\">HelpDesk</p>
        <div class=\"list-group\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\" class=\"list-group-item\">Início</a>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\" class=\"list-group-item\">Usuários</a>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("sair");
        echo "\" class=\"list-group-item\">Sair</a>
        </div>

        <p class=\"lead\">Chamados</p>
        <div class=\"list-group\">
            <a href=\"#\" class=\"list-group-item\">A Concluir</a>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("todas_chamadas");
        echo "\" class=\"list-group-item\">Ver Todos</a>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("sem_prioridade");
        echo "\" class=\"list-group-item\">Sem Prioridade</a>
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("chamadas_em_aberto");
        echo "\" class=\"list-group-item\">Em Aberto</a>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("chamadas_em_andamento");
        echo "\" class=\"list-group-item\">Em Andamento</a>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("chamadas_finalizadas");
        echo "\" class=\"list-group-item\">Finalizados</a>
            <a href=\"#\" class=\"list-group-item\">Cancelados</a>
        </div>
    </div>
";
    }

    // line 26
    public function block_container($context, array $blocks = array())
    {
        // line 27
        echo "

    <div class=\"col-md-9\">
        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal well")));
        echo "
        <fieldset>
            <legend>Definir Prioridade</legend>
            <div class=\"col-lg-12\">
                <label class=\"control-label\" for=\"input01\">Solicitante: </label>
                <div class=\"controls\">
                    <input class=\"form-control input-xlarge\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "cliente"), "html", null, true);
        echo "\" disabled=\"true\">
                    <p class=\"help-block\">Nome do usuário solicitante.</p>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <label class=\"control-label\" for=\"descricaoProblema\">Descrição:</label>
                <div class=\"controls\">
                    <textarea rows=\"5\" class=\"form-control input-xlarge\" disabled=\"true\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "observacoes"), "html", null, true);
        echo "</textarea>
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricaoProblema"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
                    ";
        // line 46
        echo "                </div>
                <p class=\"help-block\">Descrição do problema ocorrido.</p>
            </div>
            <div class=\"col-lg-6\">
                <label class=\"control-label\" for=\"select01\">Local onde ocorreu o problema:</label>
                <div class=\"controls\">
                    <input class=\"form-control input-xlarge\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "chamadaLocal"), "html", null, true);
        echo "\" disabled=\"True\" />
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaLocal"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
                </div>
            </div>
            <div class=\"col-lg-6\">
                <label class=\"control-label\" for=\"select01\">Categoria do problema:</label>
                <div class=\"controls\">
                    <input class=\"form-control input-xlarge\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "chamadaCategoria"), "html", null, true);
        echo "\" disabled=\"True\" />
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaCategoria"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
                </div>
            </div>
            <div class=\"col-lg-12\">
                <label class=\"control-label\" for=\"textarea\">Observações:</label>
                <div class=\"controls\">
                    <textarea rows=\"3\" class=\"form-control input-xlarge\" disabled=\"true\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "observacoes"), "html", null, true);
        echo "</textarea>
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacoes"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
                    <p class=\"help-block\">Observações quanto ao problema ocorrido</p>
                </div>
            </div>
            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contatoAdicional2"), 'widget', array("attr" => array("style" => "display: none;"), "disabled" => "true"));
        echo "
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contatoAdicional1"), 'widget', array("attr" => array("style" => "display:none;"), "disabled" => "true"));
        echo "
            <div class=\"col-lg-6\">
                <label class=\"control-label\" for=\"input01\">Prioridade do Chamado: </label>
                <div class=\"controls\">
                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaNivel"), 'widget', array("attr" => array("required" => "required")));
        echo "
                    <p class=\"help-block\">Nivel de prioridade do problema.</p>
                </div>
            </div>
            <div class=\"col-lg-9\">
                <div class=\"form-actions\">
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Definir"));
        echo "
                </div>
            </div>
        </fieldset>
        ";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Admin:definirPrioridade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 86,  179 => 82,  170 => 76,  163 => 72,  159 => 71,  152 => 67,  148 => 66,  139 => 60,  135 => 59,  126 => 53,  122 => 52,  114 => 46,  110 => 44,  106 => 43,  96 => 36,  87 => 30,  82 => 27,  79 => 26,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  45 => 10,  41 => 9,  37 => 8,  32 => 5,  29 => 4,);
    }
}
