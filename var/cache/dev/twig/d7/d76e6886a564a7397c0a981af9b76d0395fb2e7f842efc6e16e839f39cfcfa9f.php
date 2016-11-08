<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5e38638b6a158b400d744044204eab0a810f66ff7bd62c56f4a6c9c7373eb500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c253d4e24f4aa97409d4e8f487902e65539258e1c7dcef13242efb889f7ab7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c253d4e24f4aa97409d4e8f487902e65539258e1c7dcef13242efb889f7ab7d1->enter($__internal_c253d4e24f4aa97409d4e8f487902e65539258e1c7dcef13242efb889f7ab7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c253d4e24f4aa97409d4e8f487902e65539258e1c7dcef13242efb889f7ab7d1->leave($__internal_c253d4e24f4aa97409d4e8f487902e65539258e1c7dcef13242efb889f7ab7d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00d10ea7e1f950850731d03050c4e1b489d5ba36079f35f0fce7fecdeb06c7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d10ea7e1f950850731d03050c4e1b489d5ba36079f35f0fce7fecdeb06c7e5->enter($__internal_00d10ea7e1f950850731d03050c4e1b489d5ba36079f35f0fce7fecdeb06c7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_00d10ea7e1f950850731d03050c4e1b489d5ba36079f35f0fce7fecdeb06c7e5->leave($__internal_00d10ea7e1f950850731d03050c4e1b489d5ba36079f35f0fce7fecdeb06c7e5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf94da21977d3ed2fcb37a5ec4f345d2a14a605866d5701ec9a865bc82cd5095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf94da21977d3ed2fcb37a5ec4f345d2a14a605866d5701ec9a865bc82cd5095->enter($__internal_bf94da21977d3ed2fcb37a5ec4f345d2a14a605866d5701ec9a865bc82cd5095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bf94da21977d3ed2fcb37a5ec4f345d2a14a605866d5701ec9a865bc82cd5095->leave($__internal_bf94da21977d3ed2fcb37a5ec4f345d2a14a605866d5701ec9a865bc82cd5095_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb5c843e53b1279019fd6d7427c2bc6e379bf29b249462fa5f24e317b97d9e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5c843e53b1279019fd6d7427c2bc6e379bf29b249462fa5f24e317b97d9e64->enter($__internal_fb5c843e53b1279019fd6d7427c2bc6e379bf29b249462fa5f24e317b97d9e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fb5c843e53b1279019fd6d7427c2bc6e379bf29b249462fa5f24e317b97d9e64->leave($__internal_fb5c843e53b1279019fd6d7427c2bc6e379bf29b249462fa5f24e317b97d9e64_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
