<?php include 'functions.php'; ?>
<div class='gallery-wrapper'>  
  <?php
    gallery(file_get_contents('php://input'));
  ?>
</div>
<div class='col-xs-offset-3 col-xs-3 back-button scroll-button'>
  <i class="fa fa-long-arrow-left fa-border"></i>
</div>
<div class='col-xs-3 next-button scroll-button'>
  <i class="fa fa-long-arrow-right fa-border"></i>
</div>