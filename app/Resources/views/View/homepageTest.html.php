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
      function handleWindow() {
          width =   500;
          document.getElementById("logIn").style.top= "17px";
          document.getElementById("signIn").style.top= "6px";
          document.getElementById("search-bar").style.marginLeft= "15px";
        
        if(window.outerWidth < 950) {
            type = "px";
            document.getElementById("videos").style.marginTop= "130px";
            document.getElementById("logo").style.display= "";
            document.getElementById("logIn").style.display= "";
            document.getElementById("signIn").style.display= "";
            width = window.outerWidth - 465;
        }
          if(window.outerWidth < 660){
            document.getElementById("videos").style.marginTop= "100px";
            document.getElementById("logo").style.display= "none";
            document.getElementById("logIn").style.top= "0px";
            document.getElementById("signIn").style.top= "-11px";
            
            type="px";
            width = 200;
          }
          if(window.outerWidth < 540){
            
            document.getElementById("videos").style.marginTop= "150px";
            document.getElementById("liste").style.display= "block";
          }
          
          if(window.outerWidth < 520){
            document.getElementById("signIn").style.display= "none";
            
          }
          
          if(window.outerWidth < 420){
            document.getElementById("logIn").style.display= "none";
            document.getElementById("search-bar").style.marginLeft= "40px";
          }
        
          document.getElementById("search-bar").style.width = width+type;
      }
    </script>
</head>

<body onresize="handleWindow()" onload="handleWindow()"> 
    <div class="top-bar"  style="position:fixed;width:100%;top:0px;padding:0px;font-size:0;">
          <div id="top-bar-left"  style="font-size:0;">
                <ul id="menu" class="menu">
                    <li><img id="logo" class="top-bar-profile-pic" href="/homepage.html" src="/web/bundles/framework/images/logo.png "></li>
                    <li><input id ="search-bar" type="search" placeholder="Search Here" style="margin-right:0px;width:500px;height:40px;"></li>
                    <li><button id="afficher" type="button" class="button">Search</button></li>
                    <li id="signIn"   style="position:absolute;right:100px;height:40xp;"  ><a href="register"><button type ="button" class="button" >Sign in</button></a></li>
                    <li id ="logIn" style="position:absolute;right:20px;height:40xp;">
                        <?php
                          $href="login";
                          $log="Log In";
                          if(isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"]))
                          {
                            $href = "logout";
                            $log = "Log Out";
                          }    
                          echo '<a href="'.$href.'" style="padding:0;">';
                          echo '<button  id="log" type ="button" class="button" >'.$log.'</button></a>';
                        ?>
                    </li>
                </ul>
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