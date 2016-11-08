<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_303e884f674e67edefb93da195bab7822fe02096b1c53d270891d1ab2669f087 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8374c992d01b7622d512d331af47406815f757dabf144697c6cb9d5f3754ae35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8374c992d01b7622d512d331af47406815f757dabf144697c6cb9d5f3754ae35->enter($__internal_8374c992d01b7622d512d331af47406815f757dabf144697c6cb9d5f3754ae35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8374c992d01b7622d512d331af47406815f757dabf144697c6cb9d5f3754ae35->leave($__internal_8374c992d01b7622d512d331af47406815f757dabf144697c6cb9d5f3754ae35_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d44bd05e1360fc1258b4aae9512b33a8cd6ee682d8f1d34e521be2f9f1ef669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d44bd05e1360fc1258b4aae9512b33a8cd6ee682d8f1d34e521be2f9f1ef669->enter($__internal_6d44bd05e1360fc1258b4aae9512b33a8cd6ee682d8f1d34e521be2f9f1ef669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d44bd05e1360fc1258b4aae9512b33a8cd6ee682d8f1d34e521be2f9f1ef669->leave($__internal_6d44bd05e1360fc1258b4aae9512b33a8cd6ee682d8f1d34e521be2f9f1ef669_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6eb324bc6254e4d0825306f86986c193cadbbb60c7a7591a56247ede8c783ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb324bc6254e4d0825306f86986c193cadbbb60c7a7591a56247ede8c783ceb->enter($__internal_6eb324bc6254e4d0825306f86986c193cadbbb60c7a7591a56247ede8c783ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6eb324bc6254e4d0825306f86986c193cadbbb60c7a7591a56247ede8c783ceb->leave($__internal_6eb324bc6254e4d0825306f86986c193cadbbb60c7a7591a56247ede8c783ceb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04cbf88f1b5668aa602fb76f3348d40968aa9bfb047c91d4842e389fd28b0795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04cbf88f1b5668aa602fb76f3348d40968aa9bfb047c91d4842e389fd28b0795->enter($__internal_04cbf88f1b5668aa602fb76f3348d40968aa9bfb047c91d4842e389fd28b0795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_04cbf88f1b5668aa602fb76f3348d40968aa9bfb047c91d4842e389fd28b0795->leave($__internal_04cbf88f1b5668aa602fb76f3348d40968aa9bfb047c91d4842e389fd28b0795_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
