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
        $__internal_efb60dcd414b16f6f08fa12c2e9e4cdf7458a9f266c0524f8b438e7d33253b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb60dcd414b16f6f08fa12c2e9e4cdf7458a9f266c0524f8b438e7d33253b06->enter($__internal_efb60dcd414b16f6f08fa12c2e9e4cdf7458a9f266c0524f8b438e7d33253b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb60dcd414b16f6f08fa12c2e9e4cdf7458a9f266c0524f8b438e7d33253b06->leave($__internal_efb60dcd414b16f6f08fa12c2e9e4cdf7458a9f266c0524f8b438e7d33253b06_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb1f5e57171e72bf432af6a70b295498a2be5b160cfe13c41854a3e9649fe15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1f5e57171e72bf432af6a70b295498a2be5b160cfe13c41854a3e9649fe15f->enter($__internal_bb1f5e57171e72bf432af6a70b295498a2be5b160cfe13c41854a3e9649fe15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_bb1f5e57171e72bf432af6a70b295498a2be5b160cfe13c41854a3e9649fe15f->leave($__internal_bb1f5e57171e72bf432af6a70b295498a2be5b160cfe13c41854a3e9649fe15f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b495a3bebf8c6e844b19c2c364d78191b3fe81687690b25ffb9de196dee8f113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b495a3bebf8c6e844b19c2c364d78191b3fe81687690b25ffb9de196dee8f113->enter($__internal_b495a3bebf8c6e844b19c2c364d78191b3fe81687690b25ffb9de196dee8f113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b495a3bebf8c6e844b19c2c364d78191b3fe81687690b25ffb9de196dee8f113->leave($__internal_b495a3bebf8c6e844b19c2c364d78191b3fe81687690b25ffb9de196dee8f113_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c894118f48dcb807b593ccc011957dc7684b1b0c9ca927e12f412905afbeedae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c894118f48dcb807b593ccc011957dc7684b1b0c9ca927e12f412905afbeedae->enter($__internal_c894118f48dcb807b593ccc011957dc7684b1b0c9ca927e12f412905afbeedae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c894118f48dcb807b593ccc011957dc7684b1b0c9ca927e12f412905afbeedae->leave($__internal_c894118f48dcb807b593ccc011957dc7684b1b0c9ca927e12f412905afbeedae_prof);

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
