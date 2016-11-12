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
        $__internal_04219e8d472f75d3aa1e8003d7ff95275f03a6f6a613629a7271390718292059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04219e8d472f75d3aa1e8003d7ff95275f03a6f6a613629a7271390718292059->enter($__internal_04219e8d472f75d3aa1e8003d7ff95275f03a6f6a613629a7271390718292059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04219e8d472f75d3aa1e8003d7ff95275f03a6f6a613629a7271390718292059->leave($__internal_04219e8d472f75d3aa1e8003d7ff95275f03a6f6a613629a7271390718292059_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4faf13816a142f0d3c432b34d47fc63ef3fe4ef0261a8a2b6b893c9088ca8223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4faf13816a142f0d3c432b34d47fc63ef3fe4ef0261a8a2b6b893c9088ca8223->enter($__internal_4faf13816a142f0d3c432b34d47fc63ef3fe4ef0261a8a2b6b893c9088ca8223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_4faf13816a142f0d3c432b34d47fc63ef3fe4ef0261a8a2b6b893c9088ca8223->leave($__internal_4faf13816a142f0d3c432b34d47fc63ef3fe4ef0261a8a2b6b893c9088ca8223_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eaddaca7e35c353157340e90d68d1c23b93d567ec5d8fcc3d4c32dc4eea64cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaddaca7e35c353157340e90d68d1c23b93d567ec5d8fcc3d4c32dc4eea64cb7->enter($__internal_eaddaca7e35c353157340e90d68d1c23b93d567ec5d8fcc3d4c32dc4eea64cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eaddaca7e35c353157340e90d68d1c23b93d567ec5d8fcc3d4c32dc4eea64cb7->leave($__internal_eaddaca7e35c353157340e90d68d1c23b93d567ec5d8fcc3d4c32dc4eea64cb7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00dc305c56cc230fce809f7e0d1b84407adcc48e0cd5f841c25d2f7807a0c0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00dc305c56cc230fce809f7e0d1b84407adcc48e0cd5f841c25d2f7807a0c0b9->enter($__internal_00dc305c56cc230fce809f7e0d1b84407adcc48e0cd5f841c25d2f7807a0c0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00dc305c56cc230fce809f7e0d1b84407adcc48e0cd5f841c25d2f7807a0c0b9->leave($__internal_00dc305c56cc230fce809f7e0d1b84407adcc48e0cd5f841c25d2f7807a0c0b9_prof);

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
