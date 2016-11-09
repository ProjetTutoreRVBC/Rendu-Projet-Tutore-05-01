<?php

/* base.html.twig */
class __TwigTemplate_e97bc2261e9861b7666d953b06f39d858d3c4c0aafd69bec4f3b7a38249384e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_207f5fbd475da897717b552c37017321a70e40c404babf95234fbcfb8f48ae33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207f5fbd475da897717b552c37017321a70e40c404babf95234fbcfb8f48ae33->enter($__internal_207f5fbd475da897717b552c37017321a70e40c404babf95234fbcfb8f48ae33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_207f5fbd475da897717b552c37017321a70e40c404babf95234fbcfb8f48ae33->leave($__internal_207f5fbd475da897717b552c37017321a70e40c404babf95234fbcfb8f48ae33_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80be75647cacff216785c415679c2e910b48a6b067ff240807be14e32764f394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80be75647cacff216785c415679c2e910b48a6b067ff240807be14e32764f394->enter($__internal_80be75647cacff216785c415679c2e910b48a6b067ff240807be14e32764f394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_80be75647cacff216785c415679c2e910b48a6b067ff240807be14e32764f394->leave($__internal_80be75647cacff216785c415679c2e910b48a6b067ff240807be14e32764f394_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c10d934334c3a4a3c541466763fc03aaaa7fdcfb23a065a6d65f5f3a598d8e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10d934334c3a4a3c541466763fc03aaaa7fdcfb23a065a6d65f5f3a598d8e9e->enter($__internal_c10d934334c3a4a3c541466763fc03aaaa7fdcfb23a065a6d65f5f3a598d8e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_c10d934334c3a4a3c541466763fc03aaaa7fdcfb23a065a6d65f5f3a598d8e9e->leave($__internal_c10d934334c3a4a3c541466763fc03aaaa7fdcfb23a065a6d65f5f3a598d8e9e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bd5ae49ca538c393b149cdb099ce88953930bc80510da3da4513f24fcb7c48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd5ae49ca538c393b149cdb099ce88953930bc80510da3da4513f24fcb7c48d->enter($__internal_5bd5ae49ca538c393b149cdb099ce88953930bc80510da3da4513f24fcb7c48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_5bd5ae49ca538c393b149cdb099ce88953930bc80510da3da4513f24fcb7c48d->leave($__internal_5bd5ae49ca538c393b149cdb099ce88953930bc80510da3da4513f24fcb7c48d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c07d09b5f25cd5bfa060de633a1b92292bf82b56847e1abfc4f880191cb3c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c07d09b5f25cd5bfa060de633a1b92292bf82b56847e1abfc4f880191cb3c83->enter($__internal_0c07d09b5f25cd5bfa060de633a1b92292bf82b56847e1abfc4f880191cb3c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_0c07d09b5f25cd5bfa060de633a1b92292bf82b56847e1abfc4f880191cb3c83->leave($__internal_0c07d09b5f25cd5bfa060de633a1b92292bf82b56847e1abfc4f880191cb3c83_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/cabox/workspace/app/Resources/views/base.html.twig");
    }
}
