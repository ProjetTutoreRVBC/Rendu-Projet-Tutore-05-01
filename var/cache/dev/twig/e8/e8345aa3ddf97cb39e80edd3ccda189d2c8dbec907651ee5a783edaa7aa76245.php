<?php

/* lucky/number.html.twig */
class __TwigTemplate_d4326126a5a513de0de37104b69013d079c65567b0a5f8ad3f6bc1b62aca1ece extends Twig_Template
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
        $__internal_0f3bff53e9b6f51b4769d7db2a1a7c57cc4a187669d131451c016ea90b28f9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3bff53e9b6f51b4769d7db2a1a7c57cc4a187669d131451c016ea90b28f9c8->enter($__internal_0f3bff53e9b6f51b4769d7db2a1a7c57cc4a187669d131451c016ea90b28f9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 2
        echo "
<h1>Your lucky number is ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
        echo "</h1>";
        
        $__internal_0f3bff53e9b6f51b4769d7db2a1a7c57cc4a187669d131451c016ea90b28f9c8->leave($__internal_0f3bff53e9b6f51b4769d7db2a1a7c57cc4a187669d131451c016ea90b28f9c8_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{# app/Resources/views/lucky/number.html.twig #}

<h1>Your lucky number is {{ number }}</h1>";
    }
}
