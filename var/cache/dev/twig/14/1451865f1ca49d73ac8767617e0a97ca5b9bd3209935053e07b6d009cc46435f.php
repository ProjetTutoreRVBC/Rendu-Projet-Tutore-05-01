<?php

/* lucky/number.html.twig */
class __TwigTemplate_43033f5dfd888f651c90788c3cb61ddb6b4541ee972e072c0f7a8f91d75343a8 extends Twig_Template
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
        $__internal_13970cede4641d9677f498f25869bb6dd064ca6d62389e2de41de91536736bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13970cede4641d9677f498f25869bb6dd064ca6d62389e2de41de91536736bff->enter($__internal_13970cede4641d9677f498f25869bb6dd064ca6d62389e2de41de91536736bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 2
        echo "
<h1>Your lucky number is ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
        echo ". Controller function : ";
        echo twig_escape_filter($this->env, (isset($context["function"]) ? $context["function"] : $this->getContext($context, "function")), "html", null, true);
        echo "</h1>";
        
        $__internal_13970cede4641d9677f498f25869bb6dd064ca6d62389e2de41de91536736bff->leave($__internal_13970cede4641d9677f498f25869bb6dd064ca6d62389e2de41de91536736bff_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/lucky/number.html.twig #}

<h1>Your lucky number is {{ number }}. Controller function : {{ function }}</h1>", "lucky/number.html.twig", "/home/cabox/workspace/app/Resources/views/lucky/number.html.twig");
    }
}
