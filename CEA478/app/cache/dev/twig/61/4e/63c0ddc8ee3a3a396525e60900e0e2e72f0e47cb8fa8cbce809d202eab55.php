<?php

/* HelpDeskBundle:Cliente:abrirChamada.html.twig */
class __TwigTemplate_614e63c0ddc8ee3a3a396525e60900e0e2e72f0e47cb8fa8cbce809d202eab55 extends Twig_Template
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
        // line 100
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_home", array("userId" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Início</a>
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abrir_chamada", array("userId" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Abrir Chamada</a>
                    <a href=\"#\" class=\"list-group-item\">Minhas Chamadas</a>
                    <a href=\"#\" class=\"list-group-item\">Ver Todas Chamadas</a>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"list-group-item\">Sair</a>
                </div>
            </div>

            <div class=\"col-md-9\">
                ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal well")));
        echo "
                <fieldset>
                    <legend>Iniciar uma Chamada</legend>
                    <div class=\"col-lg-12\">
                        <label class=\"control-label\" for=\"input01\">Solicitante: </label>
                        <div class=\"controls\">
                            <input class=\"form-control input-xlarge\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nome"), "html", null, true);
        echo "\" disabled=\"true\">
                            <p class=\"help-block\">Nome do usuário solicitante.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"input01\">E-mail principal: </label>
                        <div class=\"controls\">
                            <input class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "username"), "html", null, true);
        echo "\" disabled=\"true\">
                            <p class=\"help-block\">Email principal do solicitante.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"input01\">Telefone/Ramal: </label>
                        <div class=\"controls\">
                            <input class=\"form-control\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "telefone"), "html", null, true);
        echo "\" disabled=\"true\">
                            <p class=\"help-block\">Telefone ou ramal principal do solicitante.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <label class=\"control-label\" for=\"descricaoProblema\">Descrição:</label>
                        <div class=\"controls\">
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricaoProblema"), 'widget');
        echo "
                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricaoProblema"), 'errors');
        echo "
                        </div>
                        <p class=\"help-block\">Escreva uma breve descrição do problema ocorrido.</p>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"select01\">Local onde ocorreu o problema:</label>
                        <div class=\"controls\">
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaLocal"), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"select01\">Categoria do problema:</label>
                        <div class=\"controls\">
                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaCategoria"), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <label class=\"control-label\" for=\"textarea\">Observações:</label>
                        <div class=\"controls\">
                            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacoes"), 'widget');
        echo "
                            <p class=\"help-block\">Observações quanto ao problema ocorrido. (Exemplo: uma categoria não listada)</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"input01\">Contato adicional(Celular): </label>
                        <div class=\"controls\">
                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contatoAdicional1"), 'widget');
        echo "
                            <p class=\"help-block\">Contato adicional caso não se consiga entrar em contato por outros meios.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"input01\">E-mail adicional para contato: </label>
                        <div class=\"controls\">
                            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contatoAdicional2"), 'widget');
        echo "
                            <p class=\"help-block\">Contato adicional caso haja necessidade de comunicação com o solicitante.</p>
                        </div>
                    </div>

                    <hr>

                    <div class=\"col-lg-6\">
                        <div class=\"form-actions\">
                            ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Salvar"));
        echo "
                            <button type=\"reset\" class=\"btn btn-warning\">Limpar</button>
                        </div>
                    </div>

                </fieldset>
                ";
        // line 96
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Cliente:abrirChamada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 96,  171 => 90,  159 => 81,  149 => 74,  139 => 67,  130 => 61,  121 => 55,  111 => 48,  107 => 47,  97 => 40,  87 => 33,  77 => 26,  68 => 20,  60 => 15,  54 => 12,  50 => 11,  42 => 5,  39 => 4,  34 => 100,  32 => 4,  29 => 3,);
    }
}
