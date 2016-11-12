<?php

/* home/homepage.html.php */
class __TwigTemplate_ce493ee65b3f82195bd15bc41ffd7a336424c665410da9222f50f2ce177f8a0b extends Twig_Template
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
        echo "<!-- app/Resources/views/home/homepage.html.php -->
<!doctype html>

<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Forms</title>
    <link rel=\"stylesheet\" href=\"<?php echo \$view['assets']->getUrl('bundles/framework/css/foundation.css') ?>\" type=\"text/css\"/>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js\"></script>
</head>

<body>
    <?php
      \$images_google=\$view['assets']->getUrl('bundles/framework/images/google.gif');
      \$images_profile=\$view['assets']->getUrl('bundles/framework/images/profile.jpg');
      \$base_url=\"web/app_dev/\";
      \$name=\"test\";
      \$passwd=\"test2\";    
    ?>
    <div class=\"title-bar\" style=\"height:100px;\">
        <div class=\"title-bar-left \">
            <img class=\"thumbnail \" src=\"<?php echo \$images_google?>\" style=\"width:250px;height:75px; \">
        </div>
        <div class=\"title-bar-right\" style=\"height:30px;\">
            <ul class=\"vertical menu \" data-drilldown style=\"width:150px;height:50px; \">
                <li>
                    <img class=\"thumbnail \" src=\"<?php echo \$images_profile?>\" style=\"width:75px;height:75px;\" href=\"# \">
                    <ul class=\"vertical menu \">
                        <li>
                            <a href=\"# \">Se déconnecter</a>
                        </li>
                        <li>
                            <a href=\"# \">Mon profil</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>



    <ul class=\"tabs \" data-tabs id=\"tabs_example \">
        <li class=\"tabs-title \"><a href=\"#tab2\">Vidéastes</a></li>
        <li class=\"tabs-title \"><a href=\"feed/channel/2\">Chaînes</a></li>
        <li class=\"tabs-title \"><a href=\"#tab4\">Actualité</a></li>
        <li class=\"tabs-title \"><a href=\"#tab5\">Abonnements</a></li>
        <li class=\"tabs-title is-active \"><a href=\"#tab1\">Tendances</a></li>
    </ul>

    <div class=\"tabs-content \" data-tabs-content=\"tabs_example\">
        <div class=\"tabs-panel is-active \" id=\"tab1\">
            <table>
                <tr>
                    <td>
                        <div class=\"media-object \">
                            <div class=\"media-object-section middle \">
                                <div class=\"thumbnail \">
                                    <img src=\"squeezie.jpg \" alt=\"Media Object \">
                                </div>
                            </div>
                            <div class=\"media-object-section \" href=\" \">
                                <a>MON NOUVEAU METIER...</a><br>
                                <font size=\"2 \">Squeezie</font><br>
                                <font size=\"1 \">625484 vues</font><br>
                                <font size=\"1 \">le 29/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"media-object \">
                            <div class=\"media-object-section middle \">
                                <div class=\"thumbnail \">
                                    <img src=\"detek.jpg \" alt=\"Media Object \">
                                </div>
                            </div>
                            <div class=\"media-object-section \" href=\" \">
                                <a>Un robot qui detek les mouches</a><br>
                                <font size=\"2 \">Mec louche</font><br>
                                <font size=\"1 \">6 vues</font><br>
                                <font size=\"1 \">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"media-object \">
                            <div class=\"media-object-section middle \">
                                <div class=\"thumbnail \">
                                    <img src=\"atlas.jpg \" alt=\"Media Object \">
                                </div>
                            </div>
                            <div class=\"media-object-section \" href=\" \">
                                <a>Metallica: Atlas, Rise!</a><br>
                                <font size=\"2 \">MetallicaTV</font><br>
                                <font size=\"1 \">2 354 988 vues</font><br>
                                <font size=\"1 \">le 11/11/16</font><br>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=\"media-object \">
                            <div class=\"media-object-section middle \">
                                <div class=\"thumbnail \">
                                    <img src=\"squeezie.jpg \" alt=\"Media Object \">
                                </div>
                            </div>
                            <div class=\"media-object-section \" href=\" \">
                                <a>MON NOUVEAU METIER...</a><br>
                                <font size=\"2 \">Squeezie</font><br>
                                <font size=\"1 \">625484 vues</font><br>
                                <font size=\"1 \">le 29/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"media-object \">
                            <div class=\"media-object-section middle \">
                                <div class=\"thumbnail \">
                                    <img src=\"detek.jpg \" alt=\"Media Object \">
                                </div>
                            </div>
                            <div class=\"media-object-section \" href=\" \">
                                <a>Un robot qui detek les mouches</a><br>
                                <font size=\"2 \">Mec louche</font><br>
                                <font size=\"1 \">6 vues</font><br>
                                <font size=\"1 \">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"media-object \">
                            <div class=\"media-object-section middle \">
                                <div class=\"thumbnail \">
                                    <img src=\"atlas.jpg \" alt=\"Media Object \">
                                </div>
                            </div>
                            <div class=\"media-object-section \" href=\" \">
                                <a>Metallica: Atlas, Rise!</a><br>
                                <font size=\"2 \">MetallicaTV</font><br>
                                <font size=\"1 \">2 354 988 vues</font><br>
                                <font size=\"1 \">le 11/11/16</font><br>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=\"media-object \">
                            <div class=\"media-object-section middle \">
                                <div class=\"thumbnail \">
                                    <img src=\"squeezie.jpg \" alt=\"Media Object \">
                                </div>
                            </div>
                            <div class=\"media-object-section \" href=\" \">
                                <a>MON NOUVEAU METIER...</a><br>
                                <font size=\"2 \">Squeezie</font><br>
                                <font size=\"1 \">625484 vues</font><br>
                                <font size=\"1 \">le 29/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"media-object \">
                            <div class=\"media-object-section middle \">
                                <div class=\"thumbnail \">
                                    <img src=\"detek.jpg \" alt=\"Media Object \">
                                </div>
                            </div>
                            <div class=\"media-object-section \" href=\" \">
                                <a>Un robot qui detek les mouches</a><br>
                                <font size=\"2 \">Mec louche</font><br>
                                <font size=\"1 \">6 vues</font><br>
                                <font size=\"1 \">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"media-object \">
                            <div class=\"media-object-section middle \">
                                <div class=\"thumbnail \">
                                    <img src=\"atlas.jpg \" alt=\"Media Object \">
                                </div>
                            </div>
                            <div class=\"media-object-section \" href=\" \">
                                <a>Metallica: Atlas, Rise!</a><br>
                                <font size=\"2 \">MetallicaTV</font><br>
                                <font size=\"1 \">2 354 988 vues</font><br>
                                <font size=\"1 \">le 11/11/16</font><br>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class=\"tabs-panel \" id=\"tab2\">
            <p>Second Player</p>
            <p>M S Dhoni</p>
        </div>
        <div class=\"tabs-panel \" id=\"tab3 \">
            <p>Third Player</p>
            <p>Shane Warne</p>
        </div>
        <div class=\"tabs-panel \" id=\"tab4 \">
            <p>Fourth Player</p>
            <p>Shaun Pollock</p>
        </div>
        <div class=\"tabs-panel \" id=\"tab5 \">
            <p>Five Player</p>
            <p>Adam Gilchrist</p>
        </div>
    </div>
    <script src=\"<?php echo \$view['assets']->getUrl('bundles/framework/js')?>\">
        \$(document).ready(function() {
            \$(document).foundation();
        })
    </script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "home/homepage.html.php";
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
        return new Twig_Source("", "home/homepage.html.php", "/home/cabox/workspace/app/Resources/views/home/homepage.html.php");
    }
}
