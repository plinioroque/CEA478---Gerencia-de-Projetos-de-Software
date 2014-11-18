<?php

/* HelpDeskBundle:Relatorios:index.html.twig */
class __TwigTemplate_48ecacefb454659d6b98190117fd3c55f86a0e77f71e9bfee6986dd9dc90a0cc extends Twig_Template
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
        echo "<h1>Relatorios list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Horadata</th>
                <th>Evento</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relatorios_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaData"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "evento"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relatorios_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relatorios_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("relatorios_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "HelpDeskBundle:Relatorios:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 100,  207 => 96,  197 => 92,  180 => 85,  150 => 73,  126 => 66,  172 => 67,  152 => 59,  129 => 67,  127 => 48,  77 => 27,  65 => 64,  58 => 19,  244 => 125,  236 => 123,  232 => 122,  228 => 120,  225 => 119,  186 => 92,  167 => 79,  148 => 65,  134 => 58,  124 => 51,  114 => 44,  34 => 5,  81 => 27,  97 => 33,  84 => 28,  76 => 22,  70 => 22,  53 => 21,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 56,  128 => 53,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 124,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 114,  208 => 108,  204 => 72,  179 => 69,  159 => 61,  143 => 71,  135 => 57,  119 => 42,  102 => 32,  71 => 24,  67 => 16,  63 => 15,  59 => 14,  38 => 6,  94 => 24,  89 => 33,  85 => 28,  75 => 17,  68 => 24,  56 => 21,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 24,  46 => 14,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 99,  183 => 82,  171 => 81,  166 => 71,  163 => 62,  158 => 61,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 69,  121 => 46,  117 => 44,  105 => 38,  91 => 36,  62 => 14,  49 => 17,  24 => 1,  25 => 3,  19 => 1,  79 => 23,  72 => 25,  69 => 119,  47 => 49,  40 => 8,  37 => 17,  22 => 2,  246 => 90,  157 => 75,  145 => 56,  139 => 59,  131 => 52,  123 => 47,  120 => 40,  115 => 44,  111 => 37,  108 => 42,  101 => 40,  98 => 39,  96 => 38,  83 => 25,  74 => 10,  66 => 15,  55 => 13,  52 => 18,  50 => 11,  43 => 6,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 90,  189 => 71,  187 => 88,  182 => 66,  176 => 83,  173 => 65,  168 => 72,  164 => 78,  162 => 77,  154 => 58,  149 => 51,  147 => 58,  144 => 65,  141 => 54,  133 => 55,  130 => 41,  125 => 52,  122 => 65,  116 => 46,  112 => 40,  109 => 41,  106 => 50,  103 => 32,  99 => 46,  95 => 37,  92 => 21,  86 => 28,  82 => 31,  80 => 27,  73 => 19,  64 => 20,  60 => 15,  57 => 18,  54 => 12,  51 => 12,  48 => 16,  45 => 16,  42 => 10,  39 => 4,  36 => 5,  33 => 6,  30 => 7,);
    }
}
