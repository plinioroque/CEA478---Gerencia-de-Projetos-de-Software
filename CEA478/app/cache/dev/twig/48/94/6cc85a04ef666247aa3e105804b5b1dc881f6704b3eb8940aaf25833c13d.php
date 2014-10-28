<?php

/* HelpDeskBundle:Login:login.html.twig */
class __TwigTemplate_48946cc85a04ef666247aa3e105804b5b1dc881f6704b3eb8940aaf25833c13d extends Twig_Template
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
        echo "    <div class=\"col-lg-12\">
        <form class=\"form-horizontal well col-lg-10\" method=\"POST\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\">
            <fildset>
                <legend>Login no Sistema</legend>
                <div class=\"col-lg-7\">
                    <label class=\"control-label\" for=\"input01\">Login: </label>
                    <div class=\"controls\">
                        <input class=\"form-control input-xlarge\" type=\"text\" name=\"username\" placeholder=\"e-mail\">
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <label class=\"control-label\" for=\"input02\">Senha: </label>
                    <div class=\"controls\">
                        <input class=\"form-control input-xlarge \" type=\"password\" name=\"password\" placeholder=\"Password\">
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <p class =\"help-block\">";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["erro"]) ? $context["erro"] : $this->getContext($context, "erro")), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-lg-7\">                    
                    <button type=\"submit\" class=\"btn btn-primary\">Entrar</button>
                    <button type=\"reset\" class=\"btn\">Limpar</button>
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
        return array (  53 => 21,  34 => 5,  31 => 4,  28 => 3,);
    }
}
