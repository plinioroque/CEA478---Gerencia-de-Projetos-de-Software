<?php

/* HelpDeskBundle:Chamadas:edit.html.twig */
class __TwigTemplate_48e8b96b958f1c15f7b4aee730b473b0ab4c13297cfbe72bbd90b1bbc187651d extends Twig_Template
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
        echo "<h1>Chamadas edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("chamadas");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Chamadas:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 85,  174 => 75,  152 => 65,  126 => 51,  118 => 45,  100 => 35,  70 => 25,  53 => 5,  23 => 1,  161 => 81,  137 => 60,  114 => 43,  76 => 10,  228 => 107,  212 => 98,  202 => 94,  198 => 92,  192 => 90,  185 => 87,  181 => 85,  167 => 71,  155 => 75,  148 => 73,  134 => 59,  127 => 52,  110 => 42,  58 => 13,  34 => 89,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 80,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 59,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 111,  230 => 82,  227 => 81,  224 => 71,  221 => 103,  219 => 76,  217 => 101,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 59,  135 => 53,  119 => 42,  102 => 32,  71 => 21,  67 => 20,  63 => 19,  59 => 6,  38 => 6,  94 => 28,  89 => 36,  85 => 25,  75 => 22,  68 => 14,  56 => 21,  87 => 15,  21 => 2,  26 => 6,  93 => 23,  88 => 6,  78 => 24,  46 => 14,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 81,  171 => 61,  166 => 71,  163 => 70,  158 => 80,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 29,  62 => 14,  49 => 14,  24 => 1,  25 => 3,  19 => 1,  79 => 23,  72 => 16,  69 => 11,  47 => 12,  40 => 8,  37 => 17,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 58,  131 => 68,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 24,  83 => 24,  74 => 14,  66 => 15,  55 => 15,  52 => 52,  50 => 12,  43 => 8,  41 => 7,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 83,  173 => 65,  168 => 83,  164 => 82,  162 => 77,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 71,  133 => 55,  130 => 52,  125 => 44,  122 => 43,  116 => 41,  112 => 54,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 31,  80 => 19,  73 => 19,  64 => 26,  60 => 6,  57 => 18,  54 => 13,  51 => 17,  48 => 16,  45 => 23,  42 => 10,  39 => 5,  36 => 5,  33 => 6,  30 => 7,);
    }
}
