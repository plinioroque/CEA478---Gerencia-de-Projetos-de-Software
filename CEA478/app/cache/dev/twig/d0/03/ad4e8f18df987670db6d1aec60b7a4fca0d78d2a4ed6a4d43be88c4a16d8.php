<?php

/* HelpDeskBundle:Chamadas:show.htmlBKP.twig */
class __TwigTemplate_d003ad4e8f18df987670db6d1aec60b7a4fca0d78d2a4ed6a4d43be88c4a16d8 extends Twig_Template
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
        echo "<h1>Chamadas</h1>

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
                <th>Horadata</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descricaoproblema</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descricaoProblema"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Observacoes</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observacoes"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contatoadicional1</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contatoAdicional1"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contatoadicional2</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contatoAdicional2"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descricaosolucao</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descricaoSolucao"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("chamadas");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Chamadas:show.htmlBKP.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  195 => 87,  170 => 73,  129 => 55,  113 => 48,  104 => 43,  90 => 35,  186 => 72,  97 => 39,  84 => 28,  197 => 79,  178 => 69,  172 => 67,  165 => 64,  190 => 85,  174 => 75,  152 => 65,  126 => 51,  118 => 45,  100 => 35,  70 => 25,  53 => 18,  23 => 1,  161 => 62,  137 => 60,  114 => 46,  76 => 27,  228 => 107,  212 => 98,  202 => 94,  198 => 92,  192 => 75,  185 => 87,  181 => 78,  167 => 71,  155 => 75,  148 => 73,  134 => 59,  127 => 52,  110 => 42,  58 => 13,  34 => 83,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 76,  169 => 80,  140 => 55,  132 => 51,  128 => 50,  107 => 44,  61 => 59,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 111,  230 => 82,  227 => 81,  224 => 71,  221 => 103,  219 => 76,  217 => 101,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 59,  135 => 52,  119 => 42,  102 => 32,  71 => 20,  67 => 26,  63 => 18,  59 => 6,  38 => 5,  94 => 28,  89 => 36,  85 => 25,  75 => 21,  68 => 24,  56 => 22,  87 => 15,  21 => 2,  26 => 6,  93 => 23,  88 => 6,  78 => 24,  46 => 14,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 80,  196 => 76,  183 => 81,  171 => 61,  166 => 71,  163 => 70,  158 => 80,  156 => 67,  151 => 63,  142 => 60,  138 => 54,  136 => 58,  121 => 48,  117 => 44,  105 => 40,  91 => 41,  62 => 19,  49 => 20,  24 => 1,  25 => 3,  19 => 1,  79 => 22,  72 => 25,  69 => 23,  47 => 12,  40 => 8,  37 => 17,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 58,  131 => 68,  123 => 47,  120 => 51,  115 => 43,  111 => 47,  108 => 36,  101 => 32,  98 => 31,  96 => 24,  83 => 31,  74 => 30,  66 => 15,  55 => 15,  52 => 52,  50 => 11,  43 => 8,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 71,  176 => 83,  173 => 65,  168 => 83,  164 => 82,  162 => 77,  154 => 58,  149 => 64,  147 => 63,  144 => 49,  141 => 71,  133 => 55,  130 => 52,  125 => 53,  122 => 43,  116 => 46,  112 => 54,  109 => 41,  106 => 50,  103 => 32,  99 => 46,  95 => 28,  92 => 21,  86 => 28,  82 => 31,  80 => 27,  73 => 19,  64 => 26,  60 => 22,  57 => 18,  54 => 12,  51 => 17,  48 => 11,  45 => 23,  42 => 5,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
