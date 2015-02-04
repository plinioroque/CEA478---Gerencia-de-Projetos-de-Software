<?php

/* ::templateAll.html.twig */
class __TwigTemplate_e77f0f1ea36c423a1db1ae75fe3a03d60dbf403ebf950b60417bc61eaec67bd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'barraNavegacao' => array($this, 'block_barraNavegacao'),
            'menu' => array($this, 'block_menu'),
            'container' => array($this, 'block_container'),
            'rodape' => array($this, 'block_rodape'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 54
        $this->displayBlock('menu', $context, $blocks);
        // line 66
        echo "            
            ";
        // line 67
        $this->displayBlock('container', $context, $blocks);
        // line 69
        echo "        </div>




        ";
        // line 74
        $this->displayBlock('rodape', $context, $blocks);
        // line 93
        echo "

        ";
        // line 95
        $this->displayBlock('javascripts', $context, $blocks);
        // line 100
        echo "    </body>


</html>";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <!--[if lt IE 9]>
              <script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "d/M"), "html", null, true);
        echo "
                            </label>
                        </div>
                    </div>


                </div>
            </nav><!-- /.navbar-collapse -->
        ";
    }

    // line 54
    public function block_menu($context, array $blocks = array())
    {
        // line 55
        echo "                <div class=\"col-md-3\">
                    <p class=\"lead\">HelpDesk</p>
                    <div class=\"list-group\">
                        <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\" class=\"list-group-item\">Início</a>
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("abrir_chamada");
        echo "\" class=\"list-group-item\">Abrir Chamada</a>
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("minhas_chamadas");
        echo "\" class=\"list-group-item\">Minhas Chamadas</a>
                        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("todas_chamadas");
        echo "\" class=\"list-group-item\">Ver Todas Chamadas</a>
                        <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("sair");
        echo "\" class=\"list-group-item\">Sair</a>
                    </div>
                </div>
            ";
    }

    // line 67
    public function block_container($context, array $blocks = array())
    {
        // line 68
        echo "            ";
    }

    // line 74
    public function block_rodape($context, array $blocks = array())
    {
        // line 75
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

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        // line 96
        echo "            <!-- script references -->
            <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helpdesk/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::templateAll.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  208 => 98,  204 => 97,  201 => 96,  198 => 95,  177 => 75,  174 => 74,  170 => 68,  167 => 67,  159 => 62,  155 => 61,  151 => 60,  147 => 59,  143 => 58,  138 => 55,  135 => 54,  122 => 40,  104 => 24,  101 => 23,  95 => 15,  87 => 11,  84 => 10,  77 => 100,  75 => 95,  71 => 93,  69 => 74,  62 => 69,  60 => 67,  57 => 66,  55 => 54,  48 => 49,  46 => 23,  38 => 17,  36 => 10,  25 => 1,);
    }
}
