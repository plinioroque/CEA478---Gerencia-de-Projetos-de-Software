<?php

/* HelpDeskBundle:Login:login.html.twig */
class __TwigTemplate_f0bf6b3a81eeef97e15c72ceff19848f9fedf3930d4879a72926c24268466e1b extends Twig_Template
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
    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"col-lg-12\">
        <img class=\"img-responsive col-lg-6\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/images/logoNTI.jpeg"), "html", null, true);
        echo "\" alt=\"Logo NTI\">
        <form class=\"form-horizontal well col-lg-6\" method=\"POST\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\">
            <fildset>
                <legend>Login no Sistema</legend>
                <div class=\"col-lg-9\">
                    <label class=\"control-label\" for=\"input01\">Login: </label>
                    <div class=\"controls\">
                        <input class=\"form-control input-xlarge\" type=\"email\" name=\"username\" placeholder=\"e-mail\" required=\"required\">
                    </div>
                </div>
                <div class=\"col-lg-9\">
                    <label class=\"control-label\" for=\"input02\">Senha: </label>
                    <div class=\"controls\">
                        <input class=\"form-control input-xlarge \" type=\"password\" name=\"password\" placeholder=\"Password\" required=\"required\">
                    </div>
                </div>
                <div class=\"col-lg-9\">
                    <p class =\"help-block\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["erro"]) ? $context["erro"] : $this->getContext($context, "erro")), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-lg-9\">                    
                    <button type=\"submit\" class=\"btn btn-primary\">Entrar</button>
                    <button type=\"reset\" class=\"btn btn-default\">Limpar</button>
                </div>
            </fildset>
        </form>

    </div>

";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 26,  45 => 10,  41 => 9,  37 => 7,  34 => 6,  29 => 3,);
    }
}
