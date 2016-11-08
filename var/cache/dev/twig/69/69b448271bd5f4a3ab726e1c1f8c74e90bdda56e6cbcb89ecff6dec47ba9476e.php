<?php

/* base.html.twig */
class __TwigTemplate_782b73534a677406dbcb5de284854fb04245908bc4867a1b27d1d690263e3961 extends Twig_Template
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
        $__internal_4ea34aaa583e7d88e563f6dceda4e3ac9cec4a682a41e0c0c5b40c5764c1429c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea34aaa583e7d88e563f6dceda4e3ac9cec4a682a41e0c0c5b40c5764c1429c->enter($__internal_4ea34aaa583e7d88e563f6dceda4e3ac9cec4a682a41e0c0c5b40c5764c1429c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4ea34aaa583e7d88e563f6dceda4e3ac9cec4a682a41e0c0c5b40c5764c1429c->leave($__internal_4ea34aaa583e7d88e563f6dceda4e3ac9cec4a682a41e0c0c5b40c5764c1429c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6f75cc0415e86e711bd7af8d38eb29a1618fdab53fa2fae7731810f13625cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f75cc0415e86e711bd7af8d38eb29a1618fdab53fa2fae7731810f13625cae->enter($__internal_e6f75cc0415e86e711bd7af8d38eb29a1618fdab53fa2fae7731810f13625cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e6f75cc0415e86e711bd7af8d38eb29a1618fdab53fa2fae7731810f13625cae->leave($__internal_e6f75cc0415e86e711bd7af8d38eb29a1618fdab53fa2fae7731810f13625cae_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_276f7d51021ba642680f8e1bbd832b2099b4bf41eaead47622a1eec78985b903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276f7d51021ba642680f8e1bbd832b2099b4bf41eaead47622a1eec78985b903->enter($__internal_276f7d51021ba642680f8e1bbd832b2099b4bf41eaead47622a1eec78985b903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_276f7d51021ba642680f8e1bbd832b2099b4bf41eaead47622a1eec78985b903->leave($__internal_276f7d51021ba642680f8e1bbd832b2099b4bf41eaead47622a1eec78985b903_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e25e273b3b0f4ef88f725fd7e8699cefd5abbc308bb5e895d9becc596f041f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e25e273b3b0f4ef88f725fd7e8699cefd5abbc308bb5e895d9becc596f041f5->enter($__internal_6e25e273b3b0f4ef88f725fd7e8699cefd5abbc308bb5e895d9becc596f041f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6e25e273b3b0f4ef88f725fd7e8699cefd5abbc308bb5e895d9becc596f041f5->leave($__internal_6e25e273b3b0f4ef88f725fd7e8699cefd5abbc308bb5e895d9becc596f041f5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc8b9ba0d02d9c0147fb48f1dc09b23ce2c77fe971dca3308c80781980113bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8b9ba0d02d9c0147fb48f1dc09b23ce2c77fe971dca3308c80781980113bf0->enter($__internal_bc8b9ba0d02d9c0147fb48f1dc09b23ce2c77fe971dca3308c80781980113bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bc8b9ba0d02d9c0147fb48f1dc09b23ce2c77fe971dca3308c80781980113bf0->leave($__internal_bc8b9ba0d02d9c0147fb48f1dc09b23ce2c77fe971dca3308c80781980113bf0_prof);

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

    public function getSource()
    {
        return "<!DOCTYPE html>
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
";
    }
}
