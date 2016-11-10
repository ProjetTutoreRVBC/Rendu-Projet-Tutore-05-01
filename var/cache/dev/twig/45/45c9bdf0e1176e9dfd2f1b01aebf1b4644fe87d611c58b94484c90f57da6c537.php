<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_16eb137643afed6dba16cc5d47d36f3a06c879210e8987be55b716c1208cf031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a38e40f3f9d2c118dd2c8303d698ecb4d69203dbb23a8440790b7124bd05b3c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38e40f3f9d2c118dd2c8303d698ecb4d69203dbb23a8440790b7124bd05b3c7->enter($__internal_a38e40f3f9d2c118dd2c8303d698ecb4d69203dbb23a8440790b7124bd05b3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a38e40f3f9d2c118dd2c8303d698ecb4d69203dbb23a8440790b7124bd05b3c7->leave($__internal_a38e40f3f9d2c118dd2c8303d698ecb4d69203dbb23a8440790b7124bd05b3c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5bf75cb86dda5548d3c84cb06fab98de0b09eb0e3cedafe3da91f1bdbfd48650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf75cb86dda5548d3c84cb06fab98de0b09eb0e3cedafe3da91f1bdbfd48650->enter($__internal_5bf75cb86dda5548d3c84cb06fab98de0b09eb0e3cedafe3da91f1bdbfd48650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5bf75cb86dda5548d3c84cb06fab98de0b09eb0e3cedafe3da91f1bdbfd48650->leave($__internal_5bf75cb86dda5548d3c84cb06fab98de0b09eb0e3cedafe3da91f1bdbfd48650_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9b03198d9b97c63ac325f9c6dcdc3ca64cfdc36b8f2f2c991c4cbdba9433df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b03198d9b97c63ac325f9c6dcdc3ca64cfdc36b8f2f2c991c4cbdba9433df1->enter($__internal_b9b03198d9b97c63ac325f9c6dcdc3ca64cfdc36b8f2f2c991c4cbdba9433df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b9b03198d9b97c63ac325f9c6dcdc3ca64cfdc36b8f2f2c991c4cbdba9433df1->leave($__internal_b9b03198d9b97c63ac325f9c6dcdc3ca64cfdc36b8f2f2c991c4cbdba9433df1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4681b015fb74e884dfe9244bf867de9eb7b39414fbae1335add195a060621e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4681b015fb74e884dfe9244bf867de9eb7b39414fbae1335add195a060621e7e->enter($__internal_4681b015fb74e884dfe9244bf867de9eb7b39414fbae1335add195a060621e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4681b015fb74e884dfe9244bf867de9eb7b39414fbae1335add195a060621e7e->leave($__internal_4681b015fb74e884dfe9244bf867de9eb7b39414fbae1335add195a060621e7e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/cabox/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
