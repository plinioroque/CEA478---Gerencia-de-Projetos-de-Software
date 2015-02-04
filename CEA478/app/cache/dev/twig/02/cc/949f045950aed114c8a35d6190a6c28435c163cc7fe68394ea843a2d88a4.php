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
        return array (  77 => 33,  216 => 101,  206 => 97,  180 => 86,  191 => 90,  160 => 77,  146 => 71,  124 => 64,  153 => 58,  81 => 34,  195 => 87,  170 => 73,  129 => 48,  113 => 42,  104 => 42,  90 => 35,  186 => 72,  97 => 37,  84 => 28,  197 => 79,  178 => 95,  172 => 67,  165 => 64,  190 => 85,  174 => 75,  152 => 76,  126 => 51,  118 => 45,  100 => 34,  70 => 25,  53 => 18,  23 => 1,  161 => 62,  137 => 60,  114 => 46,  76 => 22,  228 => 107,  212 => 98,  202 => 95,  198 => 92,  192 => 75,  185 => 88,  181 => 86,  167 => 71,  155 => 75,  148 => 72,  134 => 67,  127 => 65,  110 => 42,  58 => 19,  34 => 108,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 84,  169 => 80,  140 => 55,  132 => 51,  128 => 50,  107 => 44,  61 => 59,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 111,  230 => 82,  227 => 81,  224 => 71,  221 => 105,  219 => 76,  217 => 101,  208 => 68,  204 => 72,  179 => 69,  159 => 78,  143 => 54,  135 => 52,  119 => 42,  102 => 46,  71 => 30,  67 => 26,  63 => 25,  59 => 24,  38 => 6,  94 => 28,  89 => 36,  85 => 38,  75 => 21,  68 => 23,  56 => 21,  87 => 27,  21 => 2,  26 => 6,  93 => 35,  88 => 6,  78 => 34,  46 => 14,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 80,  196 => 93,  183 => 81,  171 => 82,  166 => 80,  163 => 62,  158 => 80,  156 => 67,  151 => 63,  142 => 73,  138 => 72,  136 => 51,  121 => 48,  117 => 44,  105 => 40,  91 => 28,  62 => 14,  49 => 14,  24 => 1,  25 => 3,  19 => 1,  79 => 28,  72 => 24,  69 => 23,  47 => 18,  40 => 8,  37 => 17,  22 => 2,  246 => 90,  157 => 56,  145 => 74,  139 => 58,  131 => 68,  123 => 47,  120 => 63,  115 => 43,  111 => 47,  108 => 40,  101 => 32,  98 => 31,  96 => 38,  83 => 23,  74 => 30,  66 => 15,  55 => 13,  52 => 10,  50 => 11,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 90,  187 => 84,  182 => 71,  176 => 83,  173 => 83,  168 => 83,  164 => 79,  162 => 77,  154 => 80,  149 => 56,  147 => 63,  144 => 73,  141 => 69,  133 => 55,  130 => 52,  125 => 60,  122 => 45,  116 => 54,  112 => 54,  109 => 41,  106 => 40,  103 => 32,  99 => 38,  95 => 32,  92 => 42,  86 => 28,  82 => 31,  80 => 27,  73 => 19,  64 => 26,  60 => 22,  57 => 12,  54 => 20,  51 => 17,  48 => 9,  45 => 16,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
