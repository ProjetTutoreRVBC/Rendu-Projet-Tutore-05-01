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
        $__internal_c658d7d18deae419b986dd1166f2333fb5bdcb03629e8fad03c8dff3fb91d4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c658d7d18deae419b986dd1166f2333fb5bdcb03629e8fad03c8dff3fb91d4fe->enter($__internal_c658d7d18deae419b986dd1166f2333fb5bdcb03629e8fad03c8dff3fb91d4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c658d7d18deae419b986dd1166f2333fb5bdcb03629e8fad03c8dff3fb91d4fe->leave($__internal_c658d7d18deae419b986dd1166f2333fb5bdcb03629e8fad03c8dff3fb91d4fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_15c1a3056c1fb96f0177ccda639adb71235b7e378a391d0fa087a7c88677de25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c1a3056c1fb96f0177ccda639adb71235b7e378a391d0fa087a7c88677de25->enter($__internal_15c1a3056c1fb96f0177ccda639adb71235b7e378a391d0fa087a7c88677de25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_15c1a3056c1fb96f0177ccda639adb71235b7e378a391d0fa087a7c88677de25->leave($__internal_15c1a3056c1fb96f0177ccda639adb71235b7e378a391d0fa087a7c88677de25_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b38d409b2815ec8a64bdaeeb062884a61ba81cffac22694690feea72e0354fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38d409b2815ec8a64bdaeeb062884a61ba81cffac22694690feea72e0354fbd->enter($__internal_b38d409b2815ec8a64bdaeeb062884a61ba81cffac22694690feea72e0354fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_b38d409b2815ec8a64bdaeeb062884a61ba81cffac22694690feea72e0354fbd->leave($__internal_b38d409b2815ec8a64bdaeeb062884a61ba81cffac22694690feea72e0354fbd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c970f14209640a5002aef7a8865f06f0f7af2f9db0b5e9314dc9e896d5241f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c970f14209640a5002aef7a8865f06f0f7af2f9db0b5e9314dc9e896d5241f7f->enter($__internal_c970f14209640a5002aef7a8865f06f0f7af2f9db0b5e9314dc9e896d5241f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_c970f14209640a5002aef7a8865f06f0f7af2f9db0b5e9314dc9e896d5241f7f->leave($__internal_c970f14209640a5002aef7a8865f06f0f7af2f9db0b5e9314dc9e896d5241f7f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c89fab7b61d70a109ed3f1c57ac1cf76a301f967cca70802c326a38b4884bfae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89fab7b61d70a109ed3f1c57ac1cf76a301f967cca70802c326a38b4884bfae->enter($__internal_c89fab7b61d70a109ed3f1c57ac1cf76a301f967cca70802c326a38b4884bfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_c89fab7b61d70a109ed3f1c57ac1cf76a301f967cca70802c326a38b4884bfae->leave($__internal_c89fab7b61d70a109ed3f1c57ac1cf76a301f967cca70802c326a38b4884bfae_prof);

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
