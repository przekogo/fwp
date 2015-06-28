<!DOCTYPE html>
<html>
<head>
  <title>FWP Spała</title>
  <!-- anton font -->
  <link async href="http://fonts.googleapis.com/css?family=Anton" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  <!-- Font awesome -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- Local stylesheets -->
  <link rel="stylesheet" href="assets/stylesheets/style.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
  </script>
  <script src='assets/javascripts/functions.js'></script>
  <script src='assets/javascripts/savoy.js'></script>
</head>
<body>
  <div id='background-swapper'>
    <div class='background old'></div>
  </div>
  <div id='retro-filter'><img src="assets/images/grunge.jpg"></div>
  <div id='overlay'></div>
  <div class='container-fluid'>
    <div class='row'>
      <div class='col-sm-3 col-xs-12'>
        <section id="left-sidebar">
        
          <div class="logo">
            <a href="" class="link-scroll"><img src="assets/images/logofwp.png" alt="Twilli Air"></a>
          </div><!-- .logo -->

          <!-- Menu Icon for smaller viewports -->
          <div id="mobile-menu-icon" class="visible-xs" onclick="toggle_main_menu();"><span class="glyphicon glyphicon-th"></span></div>

          <ul id="main-menu">
            <li id="menu-item-text" class="menu-item scroll retro"><a href="#text">SPAŁA</a></li>
            <li id="menu-item-carousel" class="menu-item scroll"><a href="#carousel">O NAS</a></li>
            <li id="menu-item-grid" class="menu-item scroll"><a href="#grid">OFERTA</a></li>
            <li id="menu-item-featured" class="menu-item scroll"><a href="#featured">GALERIA</a></li>
            <li id="menu-item-tabs" class="menu-item scroll"><a href="#tabs">KONTAKT</a></li>
          </ul><!-- #main-menu -->

        </section>
      </div>
      <div id='content' class='col-sm-9 col-xs-12'>
        <!-- hotels partial -->
        <div class="pull-right">

                <div class="tabpanel styled-tabs uniform-height" role="tabpanel">

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tabs-tab1" aria-controls="tabs-tab1" role="tab" data-toggle="tab" aria-expanded="true"><span>Savoy</span></a></li>
                    <li role="presentation" class=""><a href="#tabs-tab2" aria-controls="tabs-tab2" role="tab" data-toggle="tab" aria-expanded="false"><span>Miś</span></a></li>
                    <li role="presentation" class=""><a href="#tabs-tab3" aria-controls="tabs-tab3" role="tab" data-toggle="tab" aria-expanded="false"><span>Żbik</span></a></li>
                    <li role="presentation" class=""><a href="#tabs-tab4" aria-controls="tabs-tab4" role="tab" data-toggle="tab" aria-expanded="false"><span>Perła Jezior</span></a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade active in" id="tabs-tab1" style="min-height: 556px;">
                   
                      <div class='row gallery'>
                        <div class='gallery-wrapper'>
                          
<?php

$directory="./assets/images/gallery/Savoy";
$dir=opendir($directory);
 
while($file_name=readdir($dir))
    {
         if(($file_name!=".")&&($file_name!=".."))
        {
  $img = "assets/images/gallery/Savoy/".$file_name;
  echo "  <div class='polaroid'>
                            <div class='polaroid-image'>
                           <img src='$img' />
                            </div>
                            <div class='retro-filter'><img src='assets/images/grunge.jpg'></div>
                          </div>
                          ";
  echo "\n";
        }
    }
 
closedir($dir);

?>
                          <div class='polaroid'>
                            <div class='polaroid-image'>
                              <img src='assets/images/r1.jpg'>
                            </div>
                            <div class='retro-filter'><img src="assets/images/grunge.jpg"></div>
                          </div>
                          
                        </div>
                        <div class='col-xs-offset-3 col-xs-3 back-button scroll-button'>
                          <i class="fa fa-long-arrow-left fa-border"></i>
                        </div>
                        <div class='col-xs-3 next-button scroll-button'>
                          <i class="fa fa-long-arrow-right fa-border"></i>
                        </div>
                      </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tabs-tab2" style="min-height: 556px;">
                      <h4>Maecenas rhoncus tortor nec mi congue</h4>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. Suspendisse molestie lorem odio.</p>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tabs-tab3" style="min-height: 556px;">
                      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>
                      <p>Nunc accumsan sapien eu tortor fringilla, et condimentum metus pellentesque. Maecenas rhoncus tortor nec mi congue aliquet. Integer eu turpis scelerisque, iaculis magna non, tempor sem. Quisque consectetur nisi eu felis euismod, sit amet faucibus justo molestie. Ut pretium sapien dui, id facilisis metus interdum pharetra.</p>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tabs-tab4" style="min-height: 556px;">
                      <h4>Quisque consectetur nisi</h4>
                      <p>Etiam scelerisque lacus tempor, rhoncus diam vel, gravida felis. Fusce tristique sem et leo aliquam vulputate. Ut eget orci in sapien commodo fringilla. Maecenas rhoncus tortor nec mi congue aliquet. Integer eu turpis scelerisque, iaculis magna non, tempor sem.</p>
                      <p>Integer eu turpis scelerisque, iaculis magna non.</p>
                    </div>

                  </div><!-- .tab-content -->

                </div><!-- .tabpanel -->

            </div>
      </div>
    </div>
  </div>
</body>
</html>