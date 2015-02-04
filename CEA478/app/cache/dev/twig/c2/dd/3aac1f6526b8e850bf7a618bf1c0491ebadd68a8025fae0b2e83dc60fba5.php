<?php

/* HelpDeskBundle:Cliente:abrirChamada.html.twig */
class __TwigTemplate_c2dd3aac1f6526b8e850bf7a618bf1c0491ebadd68a8025fae0b2e83dc60fba5 extends Twig_Template
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
        echo "
        <div class=\"col-md-9\">
            ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal well")));
        echo "
            <fieldset>
                <legend>Iniciar uma Chamada</legend>
                <div class=\"col-lg-12\">
                    <label class=\"control-label\" for=\"input01\">Solicitante: </label>
                    <div class=\"controls\">
                        <input class=\"form-control input-xlarge\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nome"), "html", null, true);
        echo "\" disabled=\"true\">
                        <p class=\"help-block\">Nome do usuário solicitante.</p>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <label class=\"control-label\" for=\"input02\">E-mail principal: </label>
                    <div class=\"controls\">
                        <input class=\"form-control\" id='username' name='username'  value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "username"), "html", null, true);
        echo "\" disabled=\"true\">
                        <p class=\"help-block\">Email principal do solicitante.</p>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <label class=\"control-label\" for=\"input03\">Telefone/Ramal: </label>
                    <div class=\"controls\">
                        <input class=\"form-control\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "telefone"), "html", null, true);
        echo "\" disabled=\"true\">
                        <p class=\"help-block\">Telefone ou ramal principal do solicitante.</p>
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <label class=\"control-label\" for=\"descricaoProblema\">Descrição:</label>
                    <div class=\"controls\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricaoProblema"), 'widget');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricaoProblema"), 'errors');
        echo "
                    </div>
                    <p class=\"help-block\">Escreva uma breve descrição do problema ocorrido.</p>
                </div>
                <div class=\"col-lg-6\">
                    <label class=\"control-label\" for=\"select01\">Local onde ocorreu o problema:</label>
                    <div class=\"controls\">
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaLocal"), 'widget', array("attr" => array("required" => "required")));
        echo "
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <label class=\"control-label\" for=\"select02\">Categoria do problema:</label>
                    <div class=\"controls\">
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaCategoria"), 'widget', array("attr" => array("required" => "required")));
        echo "
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <label class=\"control-label\" for=\"textarea\">Observações:</label>
                    <div class=\"controls\">
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacoes"), 'widget');
        echo "
                        <p class=\"help-block\">Observações quanto ao problema ocorrido. (Exemplo: uma categoria não listada)</p>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <label class=\"control-label\" for=\"input04\">Contato adicional(Celular): </label>
                    <div class=\"controls\">
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contatoAdicional1"), 'widget', array("attr" => array("placeholder" => "(99)9999-9999", "onkeypress" => "mascara(this);")));
        echo "
                        <p class=\"help-block\">Contato adicional caso não se consiga entrar em contato por outros meios.</p>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <label class=\"control-label\" for=\"input05\">E-mail adicional para contato: </label>
                    <div class=\"controls\">
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contatoAdicional2"), 'widget', array("attr" => array("placeholder" => "email@exemplo.com")));
        echo "
                        <p class=\"help-block\">Contato adicional caso haja necessidade de comunicação com o solicitante.</p>
                    </div>
                </div>

                <hr>

                <div class=\"col-lg-6\">
                    <div class=\"form-actions\">
                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Salvar"));
        echo "
                        <button type=\"reset\" class=\"btn btn-warning\">Limpar</button>
                    </div>
                </div>
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaNivel"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricaoSolucao"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
                ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaStatus"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
            </fieldset>
            ";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>

    <script type=\"text/javascript\">
        function mascara(telefone) {
            telefone.value = telefone.value.replace(/\\D/g, \"\");             //Remove tudo o que não é dígito
            telefone.value = telefone.value.replace(/^(\\d{2})(\\d)/g, \"(\$1) \$2\"); //Coloca parênteses em volta dos dois primeiros dígitos
            telefone.value = telefone.value.replace(/(\\d)(\\d{4})\$/, \"\$1-\$2\");    //Coloca hífen entre o quarto e o quinto dígitos
             }
    </script>
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
        return array (  158 => 84,  153 => 82,  149 => 81,  145 => 80,  138 => 76,  126 => 67,  116 => 60,  106 => 53,  97 => 47,  88 => 41,  78 => 34,  74 => 33,  64 => 26,  54 => 19,  44 => 12,  35 => 6,  31 => 4,  28 => 3,);
    }
}
