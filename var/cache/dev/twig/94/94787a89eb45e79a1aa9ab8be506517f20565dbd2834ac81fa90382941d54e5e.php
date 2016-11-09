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
        $__internal_4aa15e859a80af1addf12af935cf5c6fae8cc41015107f3c88f92b75e2d5fcd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa15e859a80af1addf12af935cf5c6fae8cc41015107f3c88f92b75e2d5fcd0->enter($__internal_4aa15e859a80af1addf12af935cf5c6fae8cc41015107f3c88f92b75e2d5fcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aa15e859a80af1addf12af935cf5c6fae8cc41015107f3c88f92b75e2d5fcd0->leave($__internal_4aa15e859a80af1addf12af935cf5c6fae8cc41015107f3c88f92b75e2d5fcd0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0decb420737802b4905fd0bd6ae2b6c4e0db9d19c153435ff1fca6cea5a3b6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0decb420737802b4905fd0bd6ae2b6c4e0db9d19c153435ff1fca6cea5a3b6aa->enter($__internal_0decb420737802b4905fd0bd6ae2b6c4e0db9d19c153435ff1fca6cea5a3b6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_0decb420737802b4905fd0bd6ae2b6c4e0db9d19c153435ff1fca6cea5a3b6aa->leave($__internal_0decb420737802b4905fd0bd6ae2b6c4e0db9d19c153435ff1fca6cea5a3b6aa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32e515b7bc340503c1d2f6617a480778951cee141ae9c939fdb72f8c5901abef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e515b7bc340503c1d2f6617a480778951cee141ae9c939fdb72f8c5901abef->enter($__internal_32e515b7bc340503c1d2f6617a480778951cee141ae9c939fdb72f8c5901abef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_32e515b7bc340503c1d2f6617a480778951cee141ae9c939fdb72f8c5901abef->leave($__internal_32e515b7bc340503c1d2f6617a480778951cee141ae9c939fdb72f8c5901abef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c3b9676458c780aed1bc72f27427f05129b35e69277e6937f941fc5e2b06bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3b9676458c780aed1bc72f27427f05129b35e69277e6937f941fc5e2b06bf1->enter($__internal_1c3b9676458c780aed1bc72f27427f05129b35e69277e6937f941fc5e2b06bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1c3b9676458c780aed1bc72f27427f05129b35e69277e6937f941fc5e2b06bf1->leave($__internal_1c3b9676458c780aed1bc72f27427f05129b35e69277e6937f941fc5e2b06bf1_prof);

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
