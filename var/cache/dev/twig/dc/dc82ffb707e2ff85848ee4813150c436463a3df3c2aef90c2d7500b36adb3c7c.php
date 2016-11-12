<?php

/* default/index.html.twig */
class __TwigTemplate_e973e57d6bbdde2391445aa632760b047cc8fcd28958068ba1bfe3bece879338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d0350e70a6bbaeebf0e82f682ba02d36905026e7239794465acbe5a3f10a163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0350e70a6bbaeebf0e82f682ba02d36905026e7239794465acbe5a3f10a163->enter($__internal_4d0350e70a6bbaeebf0e82f682ba02d36905026e7239794465acbe5a3f10a163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d0350e70a6bbaeebf0e82f682ba02d36905026e7239794465acbe5a3f10a163->leave($__internal_4d0350e70a6bbaeebf0e82f682ba02d36905026e7239794465acbe5a3f10a163_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_abe9ddadfe7f0bfa2467e6871c46ca8709e5ee144dbaa528723695a83f667bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe9ddadfe7f0bfa2467e6871c46ca8709e5ee144dbaa528723695a83f667bf7->enter($__internal_abe9ddadfe7f0bfa2467e6871c46ca8709e5ee144dbaa528723695a83f667bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">List of Game of Thrones Characters</div>

                ";
        // line 9
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 10
            echo "                  <table class=\"table\">
                      <tr>
                          <th>Character</th>
                          <th>Real Name</th>
                      </tr>

                      ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["character"]) ? $context["character"] : $this->getContext($context, "character")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 17
                echo "                        <tr>
                          <td>";
                // line 18
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                  </table>
                  <a href=\"logout\" class=\"btn btn-info\">Log out</a>
                ";
        }
        // line 24
        echo "
            </div>

            ";
        // line 27
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 28
            echo "              <a href=\"login\" class=\"btn btn-info\"> You need to login to see the list 😜😜 >></a>
            ";
        }
        // line 30
        echo "        </div>
    </div>
</div>
";
        
        $__internal_abe9ddadfe7f0bfa2467e6871c46ca8709e5ee144dbaa528723695a83f667bf7->leave($__internal_abe9ddadfe7f0bfa2467e6871c46ca8709e5ee144dbaa528723695a83f667bf7_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e44ac20e1c1fbccec4de199a7f10a460736f77cc4515e45cc87e5ebabea66c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e44ac20e1c1fbccec4de199a7f10a460736f77cc4515e45cc87e5ebabea66c1->enter($__internal_3e44ac20e1c1fbccec4de199a7f10a460736f77cc4515e45cc87e5ebabea66c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 36
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
        
        $__internal_3e44ac20e1c1fbccec4de199a7f10a460736f77cc4515e45cc87e5ebabea66c1->leave($__internal_3e44ac20e1c1fbccec4de199a7f10a460736f77cc4515e45cc87e5ebabea66c1_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 36,  103 => 35,  93 => 30,  89 => 28,  87 => 27,  82 => 24,  77 => 21,  66 => 18,  63 => 17,  59 => 16,  51 => 10,  49 => 9,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">List of Game of Thrones Characters</div>

                {% if app.user != null %}
                  <table class=\"table\">
                      <tr>
                          <th>Character</th>
                          <th>Real Name</th>
                      </tr>

                      {% for key, item in character %}
                        <tr>
                          <td>{{ key }}</td><td>{{ item }}</td>
                        </tr>
                      {% endfor %}
                  </table>
                  <a href=\"logout\" class=\"btn btn-info\">Log out</a>
                {% endif %}

            </div>

            {% if app.user == null %}
              <a href=\"login\" class=\"btn btn-info\"> You need to login to see the list 😜😜 >></a>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/bootstrap.css') }}\" type=\"text/css\"/>
{% endblock %}", "default/index.html.twig", "/home/cabox/workspace/app/Resources/views/default/index.html.twig");
    }
}
