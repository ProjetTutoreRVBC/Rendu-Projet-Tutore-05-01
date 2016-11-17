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
        $__internal_53c3ec5d848dc25a4592009ea6debaa9f35d33e37662a074ed10cfb76d80af3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c3ec5d848dc25a4592009ea6debaa9f35d33e37662a074ed10cfb76d80af3b->enter($__internal_53c3ec5d848dc25a4592009ea6debaa9f35d33e37662a074ed10cfb76d80af3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53c3ec5d848dc25a4592009ea6debaa9f35d33e37662a074ed10cfb76d80af3b->leave($__internal_53c3ec5d848dc25a4592009ea6debaa9f35d33e37662a074ed10cfb76d80af3b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a61ea0ccba68829a81290d6e96e1b3216114944a47c47a9cd57a5f8df80bafbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61ea0ccba68829a81290d6e96e1b3216114944a47c47a9cd57a5f8df80bafbf->enter($__internal_a61ea0ccba68829a81290d6e96e1b3216114944a47c47a9cd57a5f8df80bafbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a61ea0ccba68829a81290d6e96e1b3216114944a47c47a9cd57a5f8df80bafbf->leave($__internal_a61ea0ccba68829a81290d6e96e1b3216114944a47c47a9cd57a5f8df80bafbf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_26b6a80abce03d88fbfde610a632f7679594d99b44fcbedf9b26cdb35b0709cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b6a80abce03d88fbfde610a632f7679594d99b44fcbedf9b26cdb35b0709cd->enter($__internal_26b6a80abce03d88fbfde610a632f7679594d99b44fcbedf9b26cdb35b0709cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_26b6a80abce03d88fbfde610a632f7679594d99b44fcbedf9b26cdb35b0709cd->leave($__internal_26b6a80abce03d88fbfde610a632f7679594d99b44fcbedf9b26cdb35b0709cd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de4a2fcb07a45ace4edb7dab626dc4a4f35f06e8ebd258d0d31af9fc6765c94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4a2fcb07a45ace4edb7dab626dc4a4f35f06e8ebd258d0d31af9fc6765c94d->enter($__internal_de4a2fcb07a45ace4edb7dab626dc4a4f35f06e8ebd258d0d31af9fc6765c94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_de4a2fcb07a45ace4edb7dab626dc4a4f35f06e8ebd258d0d31af9fc6765c94d->leave($__internal_de4a2fcb07a45ace4edb7dab626dc4a4f35f06e8ebd258d0d31af9fc6765c94d_prof);

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
