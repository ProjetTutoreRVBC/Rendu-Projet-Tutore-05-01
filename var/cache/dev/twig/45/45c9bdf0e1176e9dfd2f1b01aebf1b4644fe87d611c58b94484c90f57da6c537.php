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
        $__internal_5adfdbbf41dc930f062f7cfb0ad91e46a03cad4ee4f1b8951ad2d1ba363500d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5adfdbbf41dc930f062f7cfb0ad91e46a03cad4ee4f1b8951ad2d1ba363500d2->enter($__internal_5adfdbbf41dc930f062f7cfb0ad91e46a03cad4ee4f1b8951ad2d1ba363500d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5adfdbbf41dc930f062f7cfb0ad91e46a03cad4ee4f1b8951ad2d1ba363500d2->leave($__internal_5adfdbbf41dc930f062f7cfb0ad91e46a03cad4ee4f1b8951ad2d1ba363500d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f4f1602c1a3f543badbeea9b72464a35c2c705d8d2dbf7d94975cb086a68528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4f1602c1a3f543badbeea9b72464a35c2c705d8d2dbf7d94975cb086a68528->enter($__internal_1f4f1602c1a3f543badbeea9b72464a35c2c705d8d2dbf7d94975cb086a68528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1f4f1602c1a3f543badbeea9b72464a35c2c705d8d2dbf7d94975cb086a68528->leave($__internal_1f4f1602c1a3f543badbeea9b72464a35c2c705d8d2dbf7d94975cb086a68528_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f2ffe30fddafbd33d056f2ee098b1c9a84bddb8d828a52ef88b00c2aa66010e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2ffe30fddafbd33d056f2ee098b1c9a84bddb8d828a52ef88b00c2aa66010e->enter($__internal_0f2ffe30fddafbd33d056f2ee098b1c9a84bddb8d828a52ef88b00c2aa66010e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0f2ffe30fddafbd33d056f2ee098b1c9a84bddb8d828a52ef88b00c2aa66010e->leave($__internal_0f2ffe30fddafbd33d056f2ee098b1c9a84bddb8d828a52ef88b00c2aa66010e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5aadf0833803fca62b0ee62961467fee1b7b55a51ff96b73a61fa4e0d8482ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5aadf0833803fca62b0ee62961467fee1b7b55a51ff96b73a61fa4e0d8482ab->enter($__internal_e5aadf0833803fca62b0ee62961467fee1b7b55a51ff96b73a61fa4e0d8482ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e5aadf0833803fca62b0ee62961467fee1b7b55a51ff96b73a61fa4e0d8482ab->leave($__internal_e5aadf0833803fca62b0ee62961467fee1b7b55a51ff96b73a61fa4e0d8482ab_prof);

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
