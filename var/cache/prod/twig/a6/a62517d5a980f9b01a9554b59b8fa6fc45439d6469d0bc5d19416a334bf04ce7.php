<?php

/* :auth:login.html.twig */
class __TwigTemplate_17bb1d82c3ef38dd2948a809a3212e1932b8c6967b979b4ecf9952ad07046937 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":auth:login.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 11
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array())), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
    }

    // line 52
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 53
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
    }

    public function getTemplateName()
    {
        return ":auth:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 53,  97 => 52,  62 => 20,  55 => 15,  49 => 12,  46 => 11,  44 => 10,  40 => 9,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":auth:login.html.twig", "/home/cabox/workspace/app/Resources/views/auth/login.html.twig");
    }
}
