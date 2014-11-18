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
        // line 90
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_home", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Início</a>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"list-group-item\">Sair</a>
                </div>
                
                <p class=\"lead\">Chamadas</p>
                <div class=\"list-group\">
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abrir_chamada", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Abrir Chamada</a>
                    <a href=\"#\" class=\"list-group-item\">Minhas Chamadas</a>
                    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todas_chamadas_admin", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Ver Todas Chamadas</a>
                    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sem_prioridade", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Sem Prioridade</a>
                    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_em_aberto", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Em Aberto</a>
                    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_em_andamento", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Em Andamento</a>
                    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chamadas_finalizadas", array("userId" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"))), "html", null, true);
        echo "\" class=\"list-group-item\">Finalizadas</a>
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"list-group-item\">Sair</a>
                </div>
            </div>

            <div class=\"col-md-9\">
                ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal well")));
        echo "
                <fieldset>
                    <legend>Definir Prioridade</legend>
                    <div class=\"col-lg-12\">
                        <label class=\"control-label\" for=\"input01\">Solicitante: </label>
                        <div class=\"controls\">
                            <input class=\"form-control input-xlarge\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "cliente"), "html", null, true);
        echo "\" disabled=\"true\">
                            <p class=\"help-block\">Nome do usuário solicitante.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <label class=\"control-label\" for=\"descricaoProblema\">Descrição:</label>
                        <div class=\"controls\">
                            <textarea rows=\"5\" class=\"form-control input-xlarge\" disabled=\"true\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "observacoes"), "html", null, true);
        echo "</textarea>
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descricaoProblema"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
                            ";
        // line 46
        echo "                        </div>
                        <p class=\"help-block\">Descrição do problema ocorrido.</p>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"select01\">Local onde ocorreu o problema:</label>
                        <div class=\"controls\">
                            <input class=\"form-control input-xlarge\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "chamadaLocal"), "html", null, true);
        echo "\" disabled=\"True\" />
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaLocal"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"select01\">Categoria do problema:</label>
                        <div class=\"controls\">
                            <input class=\"form-control input-xlarge\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "chamadaCategoria"), "html", null, true);
        echo "\" disabled=\"True\" />
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaCategoria"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <label class=\"control-label\" for=\"textarea\">Observações:</label>
                        <div class=\"controls\">
                            <textarea rows=\"3\" class=\"form-control input-xlarge\" disabled=\"true\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chamada"]) ? $context["chamada"] : $this->getContext($context, "chamada")), "observacoes"), "html", null, true);
        echo "</textarea>
                            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacoes"), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
                            <p class=\"help-block\">Observações quanto ao problema ocorrido</p>
                        </div>
                    </div>
                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contatoAdicional2"), 'widget', array("attr" => array("style" => "display: none;"), "disabled" => "true"));
        echo "
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contatoAdicional1"), 'widget', array("attr" => array("style" => "display:none;"), "disabled" => "true"));
        echo "
                    <div class=\"col-lg-6\">
                        <label class=\"control-label\" for=\"input01\">Prioridade do Chamado: </label>
                        <div class=\"controls\">
                            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chamadaNivel"), 'widget');
        echo "
                            <p class=\"help-block\">Nivel de prioridade do problema.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-9\">
                        <div class=\"form-actions\">
                            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary"), "label" => "Salvar"));
        echo "
                        </div>
                    </div>
                </fieldset>
                ";
        // line 86
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
        return array (  194 => 86,  187 => 82,  178 => 76,  171 => 72,  167 => 71,  160 => 67,  156 => 66,  147 => 60,  143 => 59,  134 => 53,  130 => 52,  122 => 46,  118 => 44,  114 => 43,  104 => 36,  95 => 30,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  62 => 18,  54 => 13,  50 => 12,  42 => 6,  39 => 5,  34 => 90,  32 => 5,  29 => 4,);
    }
}
