<?php

/* HelpDeskBundle:Chamadas:definirPrioridade.html.twig */
class __TwigTemplate_1ec3357588a29bbbdb1518639d685dff5976cfdada79079f4fd87aeee102b351 extends Twig_Template
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->displayBlock('container', $context, $blocks);
        // line 89
        echo "
";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "
        <div class=\"row\">

            <div class=\"col-md-3\">
                 <p class=\"lead\">HelpDesk</p>
                <div class=\"list-group\">
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_home", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Início</a>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"list-group-item\">Sair</a>
                </div>
                
                <p class=\"lead\">Chamadas</p>
                <div class=\"list-group\">
                    <a href=\"#\" class=\"list-group-item\">Minhas Chamadas</a>
                    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todas_chamadas_admin", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Ver Todas Chamadas</a>
                    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sem_prioridade", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Sem Prioridade</a>
                    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_em_aberto", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Em Aberto</a>
                    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_em_andamento", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Em Andamento</a>
                    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_finalizadas", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Finalizadas</a>
                    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"list-group-item\">Sair</a>
                </div>
            </div>

            <div class=\"col-md-9\">
                ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal well")));
        echo "
                <fieldset>
                    <legend>Definir Prioridade</legend>
                    <div class=\"col-lg-12\">
                        <label class=\"control-label\" for=\"input01\">Solicitante: </label>
                        <div class=\"controls\">
                            <input class=\"form-control input-xlarge\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "cliente"), "html", null, true);
        echo "\" disabled=\"true\">
                            <p class=\"help-block\">Nome do usuário solicitante.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <label class=\"control-label\" for=\"descricaoProblema\">Descrição:</label>
                        <div class=\"controls\">
                            <textarea rows=\"5\" class=\"form-control input-xlarge\" disabled=\"true\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "observacoes"), "html", null, true);
        echo "</textarea>
                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricaoProblema"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
                            ";
        // line 45
        echo "                        </div>
                        <p class=\"help-block\">Descrição do problema ocorrido.</p>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"select01\">Local onde ocorreu o problema:</label>
                        <div class=\"controls\">
                            <input class=\"form-control input-xlarge\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "chamadaLocal"), "html", null, true);
        echo "\" disabled=\"True\" />
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaLocal"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"select01\">Categoria do problema:</label>
                        <div class=\"controls\">
                            <input class=\"form-control input-xlarge\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "chamadaCategoria"), "html", null, true);
        echo "\" disabled=\"True\" />
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaCategoria"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <label class=\"control-label\" for=\"textarea\">Observações:</label>
                        <div class=\"controls\">
                            <textarea rows=\"3\" class=\"form-control input-xlarge\" disabled=\"true\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "observacoes"), "html", null, true);
        echo "</textarea>
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacoes"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
                            <p class=\"help-block\">Observações quanto ao problema ocorrido</p>
                        </div>
                    </div>
                    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contatoAdicional2"), 'widget', array("attr" => array("style" => "display: none;"), "disabled" => "true"));
        echo "
                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contatoAdicional1"), 'widget', array("attr" => array("style" => "display:none;"), "disabled" => "true"));
        echo "
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"input01\">Prioridade do Chamado: </label>
                        <div class=\"controls\">
                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaNivel"), 'widget');
        echo "
                            <p class=\"help-block\">Nivel de prioridade do problema.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-9\">
                        <div class=\"form-actions\">
                            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Salvar"));
        echo "
                        </div>
                    </div>
                </fieldset>
                ";
        // line 85
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Chamadas:definirPrioridade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 85,  174 => 75,  152 => 65,  126 => 51,  118 => 45,  100 => 35,  70 => 25,  53 => 5,  23 => 1,  161 => 81,  137 => 60,  114 => 43,  76 => 10,  228 => 107,  212 => 98,  202 => 94,  198 => 92,  192 => 90,  185 => 87,  181 => 85,  167 => 71,  155 => 75,  148 => 73,  134 => 59,  127 => 52,  110 => 42,  58 => 13,  34 => 89,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 80,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 59,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 111,  230 => 82,  227 => 81,  224 => 71,  221 => 103,  219 => 76,  217 => 101,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 59,  135 => 53,  119 => 42,  102 => 32,  71 => 21,  67 => 20,  63 => 19,  59 => 6,  38 => 6,  94 => 28,  89 => 36,  85 => 25,  75 => 22,  68 => 14,  56 => 21,  87 => 15,  21 => 2,  26 => 6,  93 => 23,  88 => 6,  78 => 24,  46 => 14,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 81,  171 => 61,  166 => 71,  163 => 70,  158 => 80,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 29,  62 => 14,  49 => 14,  24 => 1,  25 => 3,  19 => 1,  79 => 23,  72 => 16,  69 => 11,  47 => 12,  40 => 8,  37 => 17,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 58,  131 => 68,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 24,  83 => 24,  74 => 14,  66 => 15,  55 => 15,  52 => 52,  50 => 12,  43 => 8,  41 => 7,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 83,  173 => 65,  168 => 83,  164 => 82,  162 => 77,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 71,  133 => 55,  130 => 52,  125 => 44,  122 => 43,  116 => 41,  112 => 54,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 31,  80 => 19,  73 => 19,  64 => 26,  60 => 6,  57 => 18,  54 => 13,  51 => 17,  48 => 16,  45 => 23,  42 => 6,  39 => 5,  36 => 5,  33 => 6,  30 => 7,);
    }
}
