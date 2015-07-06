<?php include 'functions.php'; ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="none">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php
      gallery_carousel(file_get_contents('php://input'));
    ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>