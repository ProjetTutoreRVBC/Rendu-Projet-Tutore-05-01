<?php

/* auth/login.html.twig */
class __TwigTemplate_0732d19aa9c2c0dec3f519052aacb259e64f6c29371147c3ff4cf2bac9bf39e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "auth/login.html.twig", 1);
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
        $__internal_8bd070b6c834c98fc87240ea053b54865dc597d4649b1095a83a374aed85abc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd070b6c834c98fc87240ea053b54865dc597d4649b1095a83a374aed85abc2->enter($__internal_8bd070b6c834c98fc87240ea053b54865dc597d4649b1095a83a374aed85abc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bd070b6c834c98fc87240ea053b54865dc597d4649b1095a83a374aed85abc2->leave($__internal_8bd070b6c834c98fc87240ea053b54865dc597d4649b1095a83a374aed85abc2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_463595157fbea7a40138fda86b20069f565f091f9c51f0e9e5b83b9fb8777389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463595157fbea7a40138fda86b20069f565f091f9c51f0e9e5b83b9fb8777389->enter($__internal_463595157fbea7a40138fda86b20069f565f091f9c51f0e9e5b83b9fb8777389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "auth/login.html.twig"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Login</div>
                <div class=\"panel-body\">
                    <form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login_check");
        echo "\">
                        ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array())), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 15
        echo "
                        <div class=\"form-group\">
                            <label for=\"email\" class=\"col-md-4 control-label\">E-Mail Address</label>

                            <div class=\"col-md-6\">
                                <input id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"password\" class=\"col-md-4 control-label\">Password</label>

                            <div class=\"col-md-6\">
                                <input id=\"password\" type=\"password\" class=\"form-control\" name=\"_password\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-md-offset-4\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-btn fa-sign-in\"></i> Login
                                </button>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-7 col-md-offset-4\">
                                <a href=\"../register\" class=\"btn btn-info\">Sign up</a>
                            </div>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_463595157fbea7a40138fda86b20069f565f091f9c51f0e9e5b83b9fb8777389->leave($__internal_463595157fbea7a40138fda86b20069f565f091f9c51f0e9e5b83b9fb8777389_prof);

    }

    // line 52
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3a000783cb6d08981a54b2b68ef8d01515cd6eb2f65593ae4ab4c4e5c04004e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a000783cb6d08981a54b2b68ef8d01515cd6eb2f65593ae4ab4c4e5c04004e->enter($__internal_f3a000783cb6d08981a54b2b68ef8d01515cd6eb2f65593ae4ab4c4e5c04004e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "auth/login.html.twig"));

        // line 53
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
        
        $__internal_f3a000783cb6d08981a54b2b68ef8d01515cd6eb2f65593ae4ab4c4e5c04004e->leave($__internal_f3a000783cb6d08981a54b2b68ef8d01515cd6eb2f65593ae4ab4c4e5c04004e_prof);

    }

    public function getTemplateName()
    {
        return "auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 53,  109 => 52,  71 => 20,  64 => 15,  58 => 12,  55 => 11,  53 => 10,  49 => 9,  41 => 3,  35 => 2,  11 => 1,);
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
        <div class=\"col-md-8 col-md-offset-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Login</div>
                <div class=\"panel-body\">
                    <form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"{{ path('security_login_check') }}\">
                        {% if error %}
                            <div class=\"alert alert-danger\">
                                {{ error.messageKey|trans(error.messageData) }}
                            </div>
                        {% endif %}

                        <div class=\"form-group\">
                            <label for=\"email\" class=\"col-md-4 control-label\">E-Mail Address</label>

                            <div class=\"col-md-6\">
                                <input id=\"email\" type=\"email\" class=\"form-control\" name=\"_email\" value=\"{{ last_username }}\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"password\" class=\"col-md-4 control-label\">Password</label>

                            <div class=\"col-md-6\">
                                <input id=\"password\" type=\"password\" class=\"form-control\" name=\"_password\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-md-offset-4\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fa fa-btn fa-sign-in\"></i> Login
                                </button>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-7 col-md-offset-4\">
                                <a href=\"../register\" class=\"btn btn-info\">Sign up</a>
                            </div>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('bundles/framework/css/bootstrap.css') }}\" type=\"text/css\"/>
{% endblock %}", "auth/login.html.twig", "/home/cabox/workspace/app/Resources/views/auth/login.html.twig");
    }
}
