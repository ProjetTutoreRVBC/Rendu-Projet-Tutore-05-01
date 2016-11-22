<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_38a5b9e0e98eca64e67726835438aaadf71b5dc740cdc0fdfc2d1f2366dfcf96 extends Twig_Template
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
        $__internal_54f74e76f7a71bd5a97759bdb6e3570a96c08ab6cf8f31e741a73c763988d7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f74e76f7a71bd5a97759bdb6e3570a96c08ab6cf8f31e741a73c763988d7d3->enter($__internal_54f74e76f7a71bd5a97759bdb6e3570a96c08ab6cf8f31e741a73c763988d7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f74e76f7a71bd5a97759bdb6e3570a96c08ab6cf8f31e741a73c763988d7d3->leave($__internal_54f74e76f7a71bd5a97759bdb6e3570a96c08ab6cf8f31e741a73c763988d7d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ae04af81270358a7cf058e8c0c7843017c576d9c3427bee00fcb680ea3e091c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae04af81270358a7cf058e8c0c7843017c576d9c3427bee00fcb680ea3e091c->enter($__internal_4ae04af81270358a7cf058e8c0c7843017c576d9c3427bee00fcb680ea3e091c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_4ae04af81270358a7cf058e8c0c7843017c576d9c3427bee00fcb680ea3e091c->leave($__internal_4ae04af81270358a7cf058e8c0c7843017c576d9c3427bee00fcb680ea3e091c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6e432fced9a6406530dbcd03eeb5327c5e81a8bb70439c08591a9c4be87286e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e432fced9a6406530dbcd03eeb5327c5e81a8bb70439c08591a9c4be87286e->enter($__internal_b6e432fced9a6406530dbcd03eeb5327c5e81a8bb70439c08591a9c4be87286e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b6e432fced9a6406530dbcd03eeb5327c5e81a8bb70439c08591a9c4be87286e->leave($__internal_b6e432fced9a6406530dbcd03eeb5327c5e81a8bb70439c08591a9c4be87286e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73c515b1b0c18dc493ed73873a2dec64036f4f8795fbd877c6b7238e53ada89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c515b1b0c18dc493ed73873a2dec64036f4f8795fbd877c6b7238e53ada89b->enter($__internal_73c515b1b0c18dc493ed73873a2dec64036f4f8795fbd877c6b7238e53ada89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_73c515b1b0c18dc493ed73873a2dec64036f4f8795fbd877c6b7238e53ada89b->leave($__internal_73c515b1b0c18dc493ed73873a2dec64036f4f8795fbd877c6b7238e53ada89b_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "/home/cabox/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
