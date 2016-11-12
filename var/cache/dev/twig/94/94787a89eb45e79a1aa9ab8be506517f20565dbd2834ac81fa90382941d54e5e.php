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
        $__internal_4217fd650800205c7b225800e28028472580e022e5f51d0bb43810d05e92007c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4217fd650800205c7b225800e28028472580e022e5f51d0bb43810d05e92007c->enter($__internal_4217fd650800205c7b225800e28028472580e022e5f51d0bb43810d05e92007c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4217fd650800205c7b225800e28028472580e022e5f51d0bb43810d05e92007c->leave($__internal_4217fd650800205c7b225800e28028472580e022e5f51d0bb43810d05e92007c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_041e97d439e7a7b043b90004993daf142f38111146c53bc10e53b39e2e03d657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041e97d439e7a7b043b90004993daf142f38111146c53bc10e53b39e2e03d657->enter($__internal_041e97d439e7a7b043b90004993daf142f38111146c53bc10e53b39e2e03d657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_041e97d439e7a7b043b90004993daf142f38111146c53bc10e53b39e2e03d657->leave($__internal_041e97d439e7a7b043b90004993daf142f38111146c53bc10e53b39e2e03d657_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94c3fdc83c456caf6f5f78599c10e6582797b6e9736254c800a9687280ff4b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c3fdc83c456caf6f5f78599c10e6582797b6e9736254c800a9687280ff4b51->enter($__internal_94c3fdc83c456caf6f5f78599c10e6582797b6e9736254c800a9687280ff4b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94c3fdc83c456caf6f5f78599c10e6582797b6e9736254c800a9687280ff4b51->leave($__internal_94c3fdc83c456caf6f5f78599c10e6582797b6e9736254c800a9687280ff4b51_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fac718880dc29d4991763c0c159b91557cb47b363528279fc4575c122cc02ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac718880dc29d4991763c0c159b91557cb47b363528279fc4575c122cc02ab2->enter($__internal_fac718880dc29d4991763c0c159b91557cb47b363528279fc4575c122cc02ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fac718880dc29d4991763c0c159b91557cb47b363528279fc4575c122cc02ab2->leave($__internal_fac718880dc29d4991763c0c159b91557cb47b363528279fc4575c122cc02ab2_prof);

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
