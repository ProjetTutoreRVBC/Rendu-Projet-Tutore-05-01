<?php

/* :auth:register.html.twig */
class __TwigTemplate_3971b6e3febe2ce071cc7fe175f143799bbbe03b7f6c6ca19573eef83768ecc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":auth:register.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-8 col-md-offset-2\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">Register</div>
          <div class=\"panel-body\">
            ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                  ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form_group\">
                <div class=\"col-md-8 col-md-offset-2\">
                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
              </div>
            </div>

            <div class=\"form-group\">
                <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fa fa-btn fa-user\"></i> Register
                    </button>
                </div>
            </div>
            ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
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
        return ":auth:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 53,  98 => 52,  87 => 44,  73 => 33,  64 => 27,  55 => 21,  46 => 15,  40 => 12,  32 => 6,  29 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":auth:register.html.twig", "/home/cabox/workspace/app/Resources/views/auth/register.html.twig");
    }
}
