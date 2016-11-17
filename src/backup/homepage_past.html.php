<!-- app/Resources/views/home/homepage.html.php -->
<!doctype html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/framework/css/foundation.css') ?>" type="text/css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).foundation();
        })
    </script>
</head>

<body>
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li><img class="thumbnail " src="<?php echo $view['assets']->getUrl('bundles/framework/images/logo.png') ?>" style="width:100px;height:60px;"></li>
                <li><input type="search" placeholder="Search Here" style="margin-left:15px;width:250px;" ></li>
                <li><button type="button" class="button">Search</button></li>
            </ul>
        </div>
        <div class="top-bar-right">
            <img class="thumbnail " data-open="exampleModal1" src="<?php echo $view['assets']->getUrl('bundles/framework/images/profile.jpg') ?>">
            <div class="reveal tiny" id="exampleModal1" data-reveal>
                <div style="float: right;">
                    <h2>Connexion</h2>
                    <form>
                        <div class="row">
                            <div class="small-8 columns">
                                <div class="row">
                                    <div class="small-3 columns">
                                        <label for="right-label" class="right inline">Pseudo</label>
                                    </div>
                                    <div class="small-9 columns">
                                        <input type="text" id="right-label" placeholder="pseudo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-8 columns">
                                <div class="row">
                                    <div class="small-3 columns">
                                        <label for="right-label" class="right inline">Pass</label>
                                    </div>
                                    <div class="small-9 columns">
                                        <input type="text" id="right-label" placeholder="mot de passe">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="expanded button" type="submit">Submit</button>
                    </form>
                </div>
                <div style="float: left;">
                    <h2>Inscription</h2>
                    <form action ="/web/app_dev.php/" method="POST">
                        <fieldset>
                            <div>
                                <?php echo $view['form']->form($form); ?>
                            </div>
                            <div>
                              <span id='message'></span> 
                              <script type="text/javascript">
                                  $('#user_plainPassword_first, #user_plainPassword_second').on('keyup', function () {
                                  if ($('#user_plainPassword_first').val() == $('#user_plainPassword_second').val()) {
                                      $('#message').html('Matching').css('color', 'green');
                                  } else 
                                  $('#message').html('Not Matching').css('color', 'red');
                                  });
                              </script>
                            </div>    
                        </fieldset>
                        <button class="expanded button" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <ul class="tabs " data-tabs id="tabs_example ">
        <li class="tabs-title "><a href="#tab2 ">Vidéastes</a></li>
        <li class="tabs-title "><a href="#tab3 ">Chaînes</a></li>
        <li class="tabs-title "><a href="#tab4 ">Actualité</a></li>
        <li class="tabs-title "><a href="#tab5 ">Abonnements</a></li>
        <li class="tabs-title is-active "><a href="#tab1 ">Tendances</a></li>
    </ul>

    <div class="tabs-content " data-tabs-content="tabs_example ">
        <div class="tabs-panel is-active " id="tab1 ">

            <table>
                <tr>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="squeezie.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <font size="2" href="">MON NOUVEAU METIER...</font><br>
                                <font size="2 ">Squeezie</font><br>
                                <font size="1 ">1 234 992 vues -</font>
                                <font size="1 ">le 29/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img style="height:75px;width:125px;" src="wtc.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">530 231 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img style="height:75px;width:125px;" src="<?php echo $view['assets']->getUrl('bundles/framework/images/atlas.jpg') ?>" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>Metallica: Atlas, Rise!</a><br>
                                <font size="2 ">MetallicaTV</font><br>
                                <font size="1 ">2 354 988 vues -</font>
                                <font size="1 ">le 11/11/16</font><br>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img style="height:75px;width:125px;" src="squeezie.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MON NOUVEAU METIER...</a><br>
                                <font size="2 ">Squeezie</font><br>
                                <font size="1 ">1 234 992 vues - -</font>
                                <font size="1 ">le 29/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img style="height:75px;width:125px;" src="wtc.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">61 244 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img style="height:75px;width:125px;" src="atlas.jpg " alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>Metallica: Atlas, Rise!</a><br>
                                <font size="2 ">MetallicaTV</font><br>
                                <font size="1 ">2 354 988 vues -</font>
                                <font size="1 ">le 11/11/16</font><br>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="squeezie.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MON NOUVEAU METIER...</a><br>
                                <font size="2 ">Squeezie</font><br>
                                <font size="1 ">1 234 992 vues -</font>
                                <font size="1 ">le 29/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="wtc.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>MAKING OF - WHAT THE CUT #37</a><br>
                                <font size="2 ">La Mezzanine</font><br>
                                <font size="1 ">6 vues -</font>
                                <font size="1 ">le 09/10/16</font><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="media-object ">
                            <div class="media-object-section middle ">
                                <div class="thumbnail ">
                                    <img src="atlas.jpg " style="height:75px;width:125px;" alt="Media Object ">
                                </div>
                            </div>
                            <div class="media-object-section " href=" ">
                                <a>Metallica: Atlas, Rise!</a><br>
                                <font size="2 ">MetallicaTV</font><br>
                                <font size="1 ">2 354 988 vues -</font>
                                <font size="1 ">le 11/11/16</font><br>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="tabs-panel " id="tab2 ">
            <p>Second Player</p>
            <p>M S Dhoni</p>
        </div>
        <div class="tabs-panel " id="tab3 ">
            <p>Third Player</p>
            <p>Shane Warne</p>
        </div>
        <div class="tabs-panel " id="tab4 ">
            <p>Fourth Player</p>
            <p>Shaun Pollock</p>
        </div>
        <div class="tabs-panel " id="tab5 ">
            <p>Five Player</p>
            <p>Adam Gilchrist</p>
        </div>
    </div>
</body>

</html>