<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7e4a5e2d1c83b05c2c07d82a7ef3f88cbf3c04eefae4d1bce3ce92ac5554bc3f extends Twig_Template
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
        $__internal_76b78f9c63149258ec4e001b346e4e121529bbde8764546d050ad74ba79adcad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b78f9c63149258ec4e001b346e4e121529bbde8764546d050ad74ba79adcad->enter($__internal_76b78f9c63149258ec4e001b346e4e121529bbde8764546d050ad74ba79adcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76b78f9c63149258ec4e001b346e4e121529bbde8764546d050ad74ba79adcad->leave($__internal_76b78f9c63149258ec4e001b346e4e121529bbde8764546d050ad74ba79adcad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bdcb93220cb5f56250d6d54acfbc27d955de68a25b07ed7868136e12d8dd09f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdcb93220cb5f56250d6d54acfbc27d955de68a25b07ed7868136e12d8dd09f0->enter($__internal_bdcb93220cb5f56250d6d54acfbc27d955de68a25b07ed7868136e12d8dd09f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bdcb93220cb5f56250d6d54acfbc27d955de68a25b07ed7868136e12d8dd09f0->leave($__internal_bdcb93220cb5f56250d6d54acfbc27d955de68a25b07ed7868136e12d8dd09f0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff2704846127a4c89c993d2d08d9c143059a45b4f705be357f0f0743985b2b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2704846127a4c89c993d2d08d9c143059a45b4f705be357f0f0743985b2b4f->enter($__internal_ff2704846127a4c89c993d2d08d9c143059a45b4f705be357f0f0743985b2b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff2704846127a4c89c993d2d08d9c143059a45b4f705be357f0f0743985b2b4f->leave($__internal_ff2704846127a4c89c993d2d08d9c143059a45b4f705be357f0f0743985b2b4f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_78520d6fcbfb3aaea83fd244cde1fa1d9ea7c93642187daafe390ed26c8f68c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78520d6fcbfb3aaea83fd244cde1fa1d9ea7c93642187daafe390ed26c8f68c5->enter($__internal_78520d6fcbfb3aaea83fd244cde1fa1d9ea7c93642187daafe390ed26c8f68c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_78520d6fcbfb3aaea83fd244cde1fa1d9ea7c93642187daafe390ed26c8f68c5->leave($__internal_78520d6fcbfb3aaea83fd244cde1fa1d9ea7c93642187daafe390ed26c8f68c5_prof);

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

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
