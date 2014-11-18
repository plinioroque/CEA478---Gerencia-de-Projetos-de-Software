<?php

/* HelpDeskBundle:Cliente:home.html.twig */
class __TwigTemplate_612e15850690905187efe6ed0cb1ad8acf9d3d62e0039d8a15aca890e86eb0ff extends Twig_Template
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
        // line 37
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

                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iceasisnti/images/logoicea.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"caption-full\">
                        <br><br>

                        <a class=\"list-group-item lead well-sm\"><label>Nome:</label> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nome"), "html", null, true);
        echo "</a>
                        <a class=\"list-group-item lead well-sm\"><label>E-mail:</label> ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username"), "html", null, true);
        echo "</a>
                        <a class=\"list-group-item lead well-sm\"><label>Total de Ordens Solicitadas:</label> ";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["chamadas"]) ? $context["chamadas"] : $this->getContext($context, "chamadas"))), "html", null, true);
        echo "</a>
                        <a class=\"list-group-item\"><label>Em Aberto:</label> ~</a>
                        <a class=\"list-group-item\"><label>Em Andamento:</label> ~</a>
                        <a class=\"list-group-item\"><label>Finalizadas:</label> ~</a>
                    </div>
                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Cliente:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  87 => 27,  83 => 26,  76 => 22,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  42 => 5,  39 => 4,  34 => 37,  32 => 4,  29 => 3,);
    }
}
