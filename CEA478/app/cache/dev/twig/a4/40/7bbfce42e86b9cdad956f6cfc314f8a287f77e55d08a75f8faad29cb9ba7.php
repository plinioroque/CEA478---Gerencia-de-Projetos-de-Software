<?php

/* ::templateAll.html.twig */
class __TwigTemplate_a4407bbfce42e86b9cdad956f6cfc314f8a287f77e55d08a75f8faad29cb9ba7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'barraNavegacao' => array($this, 'block_barraNavegacao'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
            'rodape' => array($this, 'block_rodape'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"br\">
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"utf-8\">
        <title>Sistema de Suporte NTI</title>
        <meta name=\"generator\" content=\"Bootply\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    </head>



    <body>

        ";
        // line 23
        $this->displayBlock('barraNavegacao', $context, $blocks);
        // line 49
        echo "

        <div class=\"container\">
            ";
        // line 52
        $this->displayBlock('container', $context, $blocks);
        // line 54
        echo "        </div>

        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "


        ";
        // line 64
        $this->displayBlock('rodape', $context, $blocks);
        // line 83
        echo "

    </body>


</html>";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!--[if lt IE 9]>
              <script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 23
    public function block_barraNavegacao($context, array $blocks = array())
    {
        // line 24
        echo "            <!-- Barra de Navegação -->
            <nav class=\"navbar navbar-inverse\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">SisNti</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                        <ul class=\"nav navbar-nav\">          
                            <li class=\"active\"><a href=\"#\">Informações</a></li>
                            <li class=\"active\"><a href=\"#\">Contato</a></li>
                        </ul>
                        <div class=\"navbar-brand navbar-collapse navbar-right\">
                            <label class=\"label\">          
                                ";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "d/M H:i"), "html", null, true);
        echo "
                            </label>
                        </div>
                    </div>


                </div>
            </nav><!-- /.navbar-collapse -->
        ";
    }

    // line 52
    public function block_container($context, array $blocks = array())
    {
        // line 53
        echo "            ";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "            <!-- script references -->
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/iceasisnti/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 64
    public function block_rodape($context, array $blocks = array())
    {
        // line 65
        echo "            <!-- /.container -->

            <div class=\"container\">

                <hr>

                <!-- Footer -->
                <footer>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <p>ICEA &copy; SisNTI 2014</p>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- /.container -->
        ";
    }

    public function getTemplateName()
    {
        return "::templateAll.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 65,  147 => 64,  141 => 59,  137 => 57,  134 => 56,  130 => 53,  127 => 52,  114 => 40,  96 => 24,  93 => 23,  87 => 15,  79 => 11,  76 => 10,  67 => 83,  65 => 64,  60 => 61,  58 => 56,  54 => 54,  52 => 52,  47 => 49,  45 => 23,  37 => 17,  35 => 10,  24 => 1,);
    }
}
