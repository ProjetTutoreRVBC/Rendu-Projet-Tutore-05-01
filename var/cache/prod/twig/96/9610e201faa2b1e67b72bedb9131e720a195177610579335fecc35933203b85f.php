<?php

/* lucky/number.html.php */
class __TwigTemplate_6ea3cb990f23e443c36093cf88b484c136c39d14dcf9f9a68b02d1d9a78633a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/lucky/number.html.php -->

<h1>Your lucky number is <?php echo \$number ?>. Controller function : <?php echo \$function?></h1>";
    }

    public function getTemplateName()
    {
        return "lucky/number.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lucky/number.html.php", "/home/cabox/workspace/app/Resources/views/lucky/number.html.php");
    }
}
