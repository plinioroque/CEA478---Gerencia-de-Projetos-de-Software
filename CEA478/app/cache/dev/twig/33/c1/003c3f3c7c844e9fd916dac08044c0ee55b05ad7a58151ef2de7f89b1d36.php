<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_33c1003c3f3c7c844e9fd916dac08044c0ee55b05ad7a58151ef2de7f89b1d36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  367 => 339,  353 => 328,  350 => 327,  308 => 287,  306 => 286,  20 => 1,  127 => 60,  110 => 22,  90 => 37,  104 => 42,  97 => 41,  84 => 27,  76 => 27,  81 => 34,  148 => 65,  77 => 33,  65 => 11,  58 => 18,  232 => 113,  228 => 112,  216 => 108,  213 => 107,  205 => 102,  184 => 87,  174 => 80,  155 => 67,  146 => 61,  34 => 5,  70 => 26,  53 => 15,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 329,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 110,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 56,  128 => 53,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 111,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 42,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  94 => 34,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  201 => 92,  196 => 96,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 54,  121 => 46,  117 => 19,  105 => 18,  91 => 35,  62 => 24,  49 => 10,  87 => 32,  21 => 2,  38 => 12,  93 => 38,  88 => 31,  78 => 18,  46 => 13,  27 => 7,  28 => 3,  26 => 3,  44 => 11,  31 => 4,  25 => 35,  24 => 2,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 8,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 64,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 37,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 30,  74 => 27,  66 => 25,  55 => 38,  52 => 10,  50 => 18,  43 => 7,  41 => 10,  35 => 9,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 73,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 52,  122 => 46,  116 => 46,  112 => 40,  109 => 41,  106 => 45,  103 => 32,  99 => 46,  95 => 34,  92 => 28,  86 => 28,  82 => 28,  80 => 29,  73 => 16,  64 => 21,  60 => 21,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 8,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
