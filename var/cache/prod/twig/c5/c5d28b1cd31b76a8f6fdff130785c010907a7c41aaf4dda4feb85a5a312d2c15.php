<?php

/* :default:index.html.twig */
class __TwigTemplate_44b2f298e082dd1d66831362941b9023390a50cc4f9c474cca90ae6ad6e28440 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">List of Game of Thrones Characters</div>

                ";
        // line 9
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
            // line 10
            echo "                  <table class=\"table\">
                      <tr>
                          <th>Character</th>
                          <th>Real Name</th>
                      </tr>

                      ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["character"]) ? $context["character"] : null));
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            // line 28
            echo "              <a href=\"login\" class=\"btn btn-info\"> You need to login to see the list 😜😜 >></a>
            ";
        }
        // line 30
        echo "        </div>
    </div>
</div>
";
    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 36
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 36,  91 => 35,  84 => 30,  80 => 28,  78 => 27,  73 => 24,  68 => 21,  57 => 18,  54 => 17,  50 => 16,  42 => 10,  40 => 9,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "/home/cabox/workspace/app/Resources/views/default/index.html.twig");
    }
}
