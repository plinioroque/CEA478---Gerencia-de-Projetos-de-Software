<?php

/* HelpDeskBundle:Cliente:abrirChamada.html.twig */
class __TwigTemplate_614e63c0ddc8ee3a3a396525e60900e0e2e72f0e47cb8fa8cbce809d202eab55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::templateAll.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/css/parsley/parsley.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script language=\"Javascript\"> function validacaoEmail(field) {
            usuario = field.value.substring(0, field.value.indexOf(\"@\"));
            dominio = field.value.substring(field.value.indexOf(\"@\") + 1, field.value.length);
            if ((usuario.length >= 1) && (dominio.length >= 3) && (usuario.search(\"@\") == -1) && (dominio.search(\"@\") == -1) && (usuario.search(\" \") == -1) && (dominio.search(\" \") == -1) && (dominio.search(\".\") != -1) && (dominio.indexOf(\".\") >= 1) && (dominio.lastIndexOf(\".\") < dominio.length - 1)) {
                document.getElementById(\"msgemail\").innerHTML = \"E-mail válido\";
                alert(\"E-mail valido\");
            } else {
                document.getElementById(\"msgemail\").innerHTML = \"<font color='red'>E-mail inválido </font>\";
                alert(\"E-mail invalido\");
            }
        }</script>

";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        $this->displayBlock('container', $context, $blocks);
        // line 118
        echo "
    ";
        // line 119
        $this->displayBlock('javascripts', $context, $blocks);
        // line 130
        echo "
";
    }

    // line 22
    public function block_container($context, array $blocks = array())
    {
        // line 23
        echo "
        <div class=\"row\">

            <div class=\"col-md-3\">
                <p class=\"lead\">HelpDesk</p>
                <div class=\"list-group\">
                    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_home", array("userId" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Início</a>
                    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abrir_chamada", array("userId" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Abrir Chamada</a>
                    <a href=\"#\" class=\"list-group-item\">Minhas Chamadas</a>
                    <a href=\"#\" class=\"list-group-item\">Ver Todas Chamadas</a>
                    <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"list-group-item\">Sair</a>
                </div>
            </div>

            <div class=\"col-md-9\">
                ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal well", "data-validat" => "parsley")));
        echo "
                <fieldset>
                    <legend>Iniciar uma Chamada</legend>
                    <div class=\"col-lg-12\">
                        <label class=\"control-label\" for=\"input01\">Solicitante: </label>
                        <div class=\"controls\">
                            <input class=\"form-control input-xlarge\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nome"), "html", null, true);
        echo "\" disabled=\"true\">
                            <p class=\"help-block\">Nome do usuário solicitante.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"input01\">E-mail principal: </label>
                        <div class=\"controls\">
                            <input class=\"form-control\" id='username' name='username'  value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "username"), "html", null, true);
        echo "\" disabled=\"true\">
                            <p class=\"help-block\">Email principal do solicitante.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"input01\">Telefone/Ramal: </label>
                        <div class=\"controls\">
                            <input class=\"form-control\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "telefone"), "html", null, true);
        echo "\" disabled=\"true\">
                            <p class=\"help-block\">Telefone ou ramal principal do solicitante.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <label class=\"control-label\" for=\"descricaoProblema\">Descrição:</label>
                        <div class=\"controls\">
                            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricaoProblema"), 'widget');
        echo "
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricaoProblema"), 'errors');
        echo "
                        </div>
                        <p class=\"help-block\">Escreva uma breve descrição do problema ocorrido.</p>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"select01\">Local onde ocorreu o problema:</label>
                        <div class=\"controls\">
                            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaLocal"), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"select01\">Categoria do problema:</label>
                        <div class=\"controls\">
                            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaCategoria"), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <label class=\"control-label\" for=\"textarea\">Observações:</label>
                        <div class=\"controls\">
                            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacoes"), 'widget');
        echo "
                            <p class=\"help-block\">Observações quanto ao problema ocorrido. (Exemplo: uma categoria não listada)</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"input01\">Contato adicional(Celular): </label>
                        <div class=\"controls\">
                            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contatoAdicional1"), 'widget');
        echo "
                            <p class=\"help-block\">Contato adicional caso não se consiga entrar em contato por outros meios.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"input01\">E-mail adicional para contato: </label>
                        <div class=\"controls\">
                            ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contatoAdicional2"), 'widget', array("attr" => array("data-trigger" => "change", "data-type" => "email")));
        echo "
                            <p class=\"help-block\">Contato adicional caso haja necessidade de comunicação com o solicitante.</p>
                        </div>
                    </div>

                    <hr>

                    <div class=\"col-lg-6\">
                        <div class=\"form-actions\">
                            ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Salvar"));
        echo "
                            <button type=\"reset\" class=\"btn btn-warning\">Limpar</button>
                        </div>
                    </div>

                </fieldset>
                ";
        // line 114
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    ";
    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        // line 120
        echo "        <!-- script references -->
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\" ></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/js/parsley/parleys.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/js/parsley/parleys-standalone.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/js/parsley/parleys.extend.min.js"), "html", null, true);
        echo "\"></script>



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
        return array (  244 => 125,  240 => 124,  236 => 123,  232 => 122,  228 => 120,  225 => 119,  217 => 114,  208 => 108,  196 => 99,  186 => 92,  176 => 85,  167 => 79,  158 => 73,  148 => 66,  144 => 65,  134 => 58,  124 => 51,  114 => 44,  105 => 38,  97 => 33,  91 => 30,  87 => 29,  79 => 23,  76 => 22,  71 => 130,  69 => 119,  66 => 118,  64 => 22,  61 => 21,  43 => 6,  39 => 5,  34 => 4,  31 => 3,);
    }
}
