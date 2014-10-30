<?php

/* HelpDeskBundle:UsuarioClasse:show.html.twig */
class __TwigTemplate_4ea562508d17d5fc4fe25f0d8098b57a4f3491345ce850b45db8349e67f43e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>UsuarioClasse</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descricao</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descricao"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("usuarioclasse");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarioclasse_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:UsuarioClasse:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 35,  84 => 28,  76 => 26,  81 => 34,  148 => 65,  77 => 26,  65 => 64,  58 => 56,  232 => 113,  228 => 112,  216 => 108,  213 => 107,  205 => 102,  184 => 87,  174 => 80,  155 => 67,  146 => 61,  34 => 37,  70 => 25,  53 => 21,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 110,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 56,  128 => 53,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 111,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 57,  119 => 42,  102 => 32,  71 => 30,  67 => 26,  63 => 15,  59 => 115,  94 => 24,  89 => 36,  85 => 28,  75 => 17,  68 => 24,  56 => 21,  201 => 92,  196 => 96,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 54,  121 => 46,  117 => 44,  105 => 40,  91 => 32,  62 => 23,  49 => 14,  87 => 25,  21 => 2,  38 => 6,  93 => 26,  88 => 6,  78 => 21,  46 => 14,  27 => 4,  28 => 3,  26 => 6,  44 => 15,  31 => 4,  25 => 3,  24 => 1,  19 => 1,  79 => 18,  72 => 25,  69 => 11,  47 => 49,  40 => 8,  37 => 17,  22 => 2,  246 => 90,  157 => 56,  145 => 64,  139 => 59,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 30,  66 => 24,  55 => 15,  52 => 52,  50 => 11,  43 => 6,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 73,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 52,  122 => 46,  116 => 46,  112 => 40,  109 => 41,  106 => 50,  103 => 32,  99 => 46,  95 => 28,  92 => 21,  86 => 28,  82 => 31,  80 => 27,  73 => 19,  64 => 26,  60 => 22,  57 => 18,  54 => 12,  51 => 17,  48 => 16,  45 => 23,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
