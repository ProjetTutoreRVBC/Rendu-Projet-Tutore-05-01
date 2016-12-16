<!-- app/Resources/views/View/homepageTest.html.php-->  
<!doctype html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <link rel="stylesheet" href="/web/bundles/framework/css/foundation.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/validation/form.js') ?>"></script>
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/display/upload.js') ?>"></script>
    <script>
      var width;
      var type;
      function myFunction() {
          width =   500;
          if(window.outerWidth < 850) {
            type = "px";
            
            document.getElementById("videos").style.marginTop= "130px";
            document.getElementById("images").style.left= "";
            width = window.outerWidth - 350;
          }
          if(window.outerWidth < 550){
            document.getElementById("videos").style.marginTop= "130px";
            document.getElementById("liste").style.display= "block";
            type="px";
             width = 200;
          }
          
          if(window.outerWidth < 550){
            document.getElementById("videos").style.marginTop= "180px";
            document.getElementById("images").style.left= "540px";
          }
          var x = window.outerWidth;
          var y = window.outerHeight;
          document.getElementById("afficher").innerHTML = x+ " "+y;
          document.getElementById("search-bar").style.width = width+type;
      }
    </script>
</head>

<body onresize="myFunction()" onload="myFunction()"> 
    <div class="top-bar"  style="position:fixed;width:100%;top:0px;padding:0px;font-size:0;">
          <div id="top-bar-left"  style="font-size:0;">
                <ul id="menu" class="menu">
                    <li><img class="top-bar-profile-pic" href="/homepage.html" src="/web/bundles/framework/images/logo.png "></li>
                    <li><input id ="search-bar" type="search" placeholder="Search Here" style="margin-left:15px;margin-right:0px;width:500px;height:40px;"></li>
                    <li><button id="afficher" type="button" class="button" style="height:40px;">Search</button></li>
                    <li  id ="images"  style="position:absolute;top:20px;right:20px;"><img style="width:27px;height:27px;" class="thumbnail" data-open="toggle" src="/web/bundles/framework/images/profile.jpg "></li>
                </ul>
              <div class="reveal xlarge" id="toggle" data-reveal>
                <div style="display:inline-block;height:100%;width:100%;overflow:hidden;">
                  <div style="float: right;" id="modal-form-login">
                      <h2>Connexion</h2>
                      <form class="form-horizontal" method="POST" action="" id="contact_form">
                          <div class="row">
                              <div class="small-8 columns">
                                  <div class="row">
                                      <div class="small-3 columns">
                                          <label>Pseudo</label>
                                          <input name="_email" type="text" id="right-label" placeholder="pseudo">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="small-8 columns">
                                  <div class="row">
                                      <div class="small-3 columns">
                                          <label>Pass</label>
                                          <input name="_password" type="password" id="right-label" placeholder="mot de passe">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <button name="login" id="submitForm" class="expanded button" type="submit">Submit</button>
                      </form>
                  </div>
                  <div style="float: left;">
                      <h2>Inscription</h2>
                      <form action="" method="POST">
                      <fieldset>
                              <div class="row">
                                  <div class="large-4 columns">
                                      <label>Adresse mail</label>
                                      <input type="email" id="user_email" name="email" onchange="checkEmail();" required="required">
                                      <i id="confirmMessageImg-email"></i>
                                      <h2 id='result'></h2>
                                  </div>
                                  <div class="medium-4 columns">
                                      <label>Date de naissance</label>
                                      <input id="user_birth" name="user[birth]" required="required" type="date">
                                  </div>
                                  <div class="large-4 columns">
                                      <label>Avatar</label>
                                      <label for="exampleFileUpload" class="button">Upload File</label>
                                       <input type='file' name="avatar" id="exampleFileUpload" class="show-for-sr" onchange="readURL(this);" />
                                       <span id="display-parent" ></span> 
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="large-4 columns">
                                      <label>Pseudo</label>
                                      <input type="text" id="user_name" name="name"  onchange="checkName();" required="required">
                                      <i id="confirmMessageImg-name"></i>
                                     </div>
                                  <div class="large-4 columns">
                                      <label>Mot de passe</label>
                                      <input type="password" id="user_plainPassword_first" name="passwd" onkeyup="checkPassImg(); return false;" required="required">
                                  </div>
                                  <div class="large-4 columns">
                                      <label>Confirmez mot de passe</label>
                                      <input type="password" id="user_plainPassword_second" name="user[plainPassword][second]" onkeyup="checkPassImg(); return false;" required="required">
                                      <i id="confirmMessageImg-password"></i>
                                  </div>
                              </div>
                          </fieldset>
                          <button name="register" id="submit-button" class="expanded button" type="submit">Submit</button>
                </div>
                <button class="close-button" data-close aria-label="Close modal" type="button">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                </div>
            </div>
            <div id="liste" style="width:100%;display: inline-block;border-color: grey;border-style: solid; border-width: 1px 0px 1px 0px;">
              <ul class="tabs " data-tabs id="tabs_example">
                <li class="tabs-title "><a href="#tab2">Vidéastes</a></li>
                <li class="tabs-title "><a href="#tab3 ">Chaînes</a></li>
                <li class="tabs-title "><a href="#tab4 ">Actualité</a></li>
                <li class="tabs-title "><a href="#tab5 ">Abonnements</a></li>
                <li class="tabs-title is-active "><a href="#tab1">Tendances</a></li>
              </ul>
            </div>
        </div>
        <div  id="videos" class="tabs-content " data-tabs-content="tabs_example"  style="margin-top:130px;">
        <!------------------------------------------------------------Section Tendances---------------------------->
          <div  class="tabs-panel is-active " id="tab1" >
            <div class ="defilement-video" style="text-align: center;">
              <?php
              for($i = 0; $i < 50; $i++)
                {
              echo '
                <a href ="video">
                  <div style="height:125px;width:225px;display:inline-block;margin:4px;">
                    <div style="height:35px;overflow:hidden;">
                        <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser from Hardwired...To self Destruct</strong></font><br>
                    </div>
                    <img src="/web/bundles/framework/images/atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                    <div>

                    </div>

                    <div style="width:225px;">
                        <a href="channel" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">MetallicaTV</font>
                        </a>
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">Metallica Studio</font>
                        </a>
                    </div>
                    <div style="text-align:center;">
                        <font size="1 ">1 234 992 vues -</font>
                        <font size="1 ">le 29/10/16</font>
                    </div>
                </div>
              </a>';
                }
              ?>
            </div>  
          </div>
        <!------------------------------------------------------------Section Vidéastes---------------------------->

        <div class="tabs-panel" id="tab2">
            <h1>bonjour</h1>

        </div>

        <div class="tabs-panel " id="tab3">
            <p>Third Player</p>
            <p>Shane Warne</p>
        </div>
        <div class="tabs-panel " id="tab4">
            <p>Fourth Player</p>
            <p>Shaun Pollock</p>
        </div>
        <div class="tabs-panel " id="tab5">
            <p>Five Player</p>
            <p>Adam Gilchrist</p>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(document).foundation();
        })
    </script>

</body>

</html>