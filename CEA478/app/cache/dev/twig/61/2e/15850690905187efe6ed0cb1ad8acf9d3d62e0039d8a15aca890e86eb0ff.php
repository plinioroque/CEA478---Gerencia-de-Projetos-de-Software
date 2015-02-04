<?php

/* HelpDeskBundle:Cliente:home.html.twig */
class __TwigTemplate_612e15850690905187efe6ed0cb1ad8acf9d3d62e0039d8a15aca890e86eb0ff extends Twig_Template
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

                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/images/logoicea.jpg"), "html", null, true);
        echo "\" alt=\"Logo NTI\">
                    <div class=\"caption-full\">
                        <br><br>

                        <a class=\"list-group-item lead well-sm\"><label>Nome:</label> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nome"), "html", null, true);
        echo "</a>
                        <a class=\"list-group-item lead well-sm\"><label>E-mail:</label> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username"), "html", null, true);
        echo "</a>
                        <a class=\"list-group-item lead well-sm\"><label>Total de Ordens Solicitadas:</label> ";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["chamadas"]) ? $context["chamadas"] : $this->getContext($context, "chamadas"))), "html", null, true);
        echo "</a>
                        <a class=\"list-group-item\"><label>Em Aberto:</label> ~</a>
                        <a class=\"list-group-item\"><label>Em Andamento:</label> ~</a>
                        <a class=\"list-group-item\"><label>Finalizadas:</label> ~</a>
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
        return array (  52 => 14,  48 => 13,  44 => 12,  37 => 8,  31 => 4,  28 => 3,);
    }
}
