<?php

/* HelpDeskBundle:Usuario:new.html.twig */
class __TwigTemplate_8105de54b485cdd2d350fb6e305a10f7f8da899a0e0612c4a948f4923e9f372b extends Twig_Template
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
            <legend>Cadastrar Usuário</legend>
            <div class=\"col-lg-12\">
                <label class=\"control-label\" for=\"nome\">Nome: </label>
                <div class=\"controls\">
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nome"), 'widget');
        echo "
                    <p class=\"help-block\">Nome completo do usuário.</p>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <label class=\"control-label\" for=\"descricaoProblema\">E-mail:</label>
                <div class=\"controls\">
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("placeholder" => "email@exemplo.com")));
        echo "
                    <p class=\"help-block\">E-mail principal do usuário.</p>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <label class=\"control-label\" for=\"select01\">Senha:</label>
                <div class=\"controls\">
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "
                    <p class=\"help-block\">Senha de acesso ao login do sistema.</p>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <label class=\"control-label\" for=\"select01\">Telefone:</label>
                <div class=\"controls\">
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefone"), 'widget', array("attr" => array("placeholder" => "(99)9999-9999", "onkeypress" => "mascara(this);")));
        echo "
                    <p class=\"help-block\">Telefone principal do usuário.</p>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <label class=\"control-label\" for=\"textarea\">Classe:</label>
                <div class=\"controls\">
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuarioClasse"), 'widget');
        echo "
                    <p class=\"help-block\">Classe do usuário, irá definir o nível de acesso do usuário ao sistema.</p>
                </div>
            </div>
            <div class=\"col-lg-9\">
                <div class=\"form-actions\">
                    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Salvar"));
        echo "
                    <button type=\"reset\" class=\"btn btn-warning\">Limpar</button>
                </div>
            </div>
        </fieldset>
        ";
        // line 75
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
        return "HelpDeskBundle:Usuario:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 75,  145 => 70,  136 => 64,  126 => 57,  116 => 50,  106 => 43,  96 => 36,  87 => 30,  82 => 27,  79 => 26,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  45 => 10,  41 => 9,  37 => 8,  32 => 5,  29 => 4,);
    }
}
