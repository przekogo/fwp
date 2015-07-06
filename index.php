<?php
  include 'functions.php';
?>
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
  <script src='assets/javascripts/index.js'></script>
</head>
<body>
  <div id='background-swapper'>
    <div class='background old'></div>
  </div>
  <div id='retro-filter'><!-- <img src="assets/images/grunge.jpg"> --></div>
  <div id='overlay'></div>
  <div class='container-fluid'>
    <div class='row'>
      <div class='col-sm-3 col-xs-12'>
        <section id="left-sidebar">
        
          <div class="logo">
            <a href='javascript:;' class="link-scroll"><img src="assets/images/logofwp.png" alt="Twilli Air"></a>
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
        <!-- polaroid partial -->
        <?php
          include('polaroids.php');
        ?>
      </div>
    </div>
  </div>
</body>
</html>