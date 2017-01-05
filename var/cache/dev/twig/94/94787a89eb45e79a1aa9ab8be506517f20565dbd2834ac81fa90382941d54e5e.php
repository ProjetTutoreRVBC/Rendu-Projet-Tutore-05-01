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
        $__internal_45f3041e98bd2929c9fc012da5939b72f139d597861492ece6272e934add6ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f3041e98bd2929c9fc012da5939b72f139d597861492ece6272e934add6ad2->enter($__internal_45f3041e98bd2929c9fc012da5939b72f139d597861492ece6272e934add6ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45f3041e98bd2929c9fc012da5939b72f139d597861492ece6272e934add6ad2->leave($__internal_45f3041e98bd2929c9fc012da5939b72f139d597861492ece6272e934add6ad2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11d1a2818770928c69b0ea865fce74b8238624c9c5bf924df050b798b80f09c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d1a2818770928c69b0ea865fce74b8238624c9c5bf924df050b798b80f09c9->enter($__internal_11d1a2818770928c69b0ea865fce74b8238624c9c5bf924df050b798b80f09c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_11d1a2818770928c69b0ea865fce74b8238624c9c5bf924df050b798b80f09c9->leave($__internal_11d1a2818770928c69b0ea865fce74b8238624c9c5bf924df050b798b80f09c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6256813ca4101e5996b9911b3d28ecda91fe30f5fe4d82d7ac5832e646804913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6256813ca4101e5996b9911b3d28ecda91fe30f5fe4d82d7ac5832e646804913->enter($__internal_6256813ca4101e5996b9911b3d28ecda91fe30f5fe4d82d7ac5832e646804913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6256813ca4101e5996b9911b3d28ecda91fe30f5fe4d82d7ac5832e646804913->leave($__internal_6256813ca4101e5996b9911b3d28ecda91fe30f5fe4d82d7ac5832e646804913_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0c75a3fa06e936d51a1860848999a64b43cfca0173ac7d530076fefcb26d415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c75a3fa06e936d51a1860848999a64b43cfca0173ac7d530076fefcb26d415->enter($__internal_c0c75a3fa06e936d51a1860848999a64b43cfca0173ac7d530076fefcb26d415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c0c75a3fa06e936d51a1860848999a64b43cfca0173ac7d530076fefcb26d415->leave($__internal_c0c75a3fa06e936d51a1860848999a64b43cfca0173ac7d530076fefcb26d415_prof);

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
