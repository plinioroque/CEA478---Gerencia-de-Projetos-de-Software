<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_02cc949f045950aed114c8a35d6190a6c28435c163cc7fe68394ea843a2d88a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  212 => 100,  207 => 96,  197 => 92,  180 => 85,  150 => 73,  126 => 66,  172 => 67,  152 => 59,  129 => 67,  127 => 48,  77 => 33,  65 => 64,  58 => 19,  244 => 125,  236 => 123,  232 => 122,  228 => 120,  225 => 119,  186 => 92,  167 => 79,  148 => 65,  134 => 58,  124 => 51,  114 => 44,  34 => 5,  81 => 27,  97 => 37,  84 => 28,  76 => 22,  70 => 25,  53 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 56,  128 => 53,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 124,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 114,  208 => 108,  204 => 72,  179 => 69,  159 => 61,  143 => 71,  135 => 57,  119 => 42,  102 => 32,  71 => 30,  67 => 26,  63 => 25,  59 => 14,  38 => 6,  94 => 24,  89 => 36,  85 => 38,  75 => 17,  68 => 23,  56 => 21,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 34,  46 => 14,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 99,  183 => 82,  171 => 81,  166 => 71,  163 => 62,  158 => 61,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 69,  121 => 46,  117 => 44,  105 => 38,  91 => 36,  62 => 14,  49 => 14,  24 => 1,  25 => 3,  19 => 1,  79 => 28,  72 => 24,  69 => 119,  47 => 18,  40 => 8,  37 => 17,  22 => 2,  246 => 90,  157 => 75,  145 => 56,  139 => 59,  131 => 52,  123 => 47,  120 => 40,  115 => 44,  111 => 37,  108 => 42,  101 => 40,  98 => 39,  96 => 38,  83 => 25,  74 => 10,  66 => 15,  55 => 13,  52 => 10,  50 => 11,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 90,  189 => 71,  187 => 88,  182 => 66,  176 => 83,  173 => 65,  168 => 72,  164 => 78,  162 => 77,  154 => 58,  149 => 51,  147 => 58,  144 => 65,  141 => 54,  133 => 55,  130 => 41,  125 => 52,  122 => 65,  116 => 46,  112 => 40,  109 => 41,  106 => 50,  103 => 32,  99 => 46,  95 => 37,  92 => 42,  86 => 28,  82 => 31,  80 => 27,  73 => 19,  64 => 26,  60 => 22,  57 => 12,  54 => 20,  51 => 17,  48 => 9,  45 => 16,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
