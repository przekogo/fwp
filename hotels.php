<?php include 'functions.php'; ?>

<div class="pull-right">

    <div class="tabpanel styled-tabs uniform-height" role="tabpanel">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class=""><a href="#tabs-tab1" aria-controls="tabs-tab1" role="tab" data-toggle="tab" aria-expanded="true"><span>Savoy</span></a></li>
        <li role="presentation" class=""><a href="#tabs-tab2" aria-controls="tabs-tab2" role="tab" data-toggle="tab" aria-expanded="false"><span>Miś</span></a></li>
        <li role="presentation" class=""><a href="#tabs-tab3" aria-controls="tabs-tab3" role="tab" data-toggle="tab" aria-expanded="false"><span>Żbik</span></a></li>
        <li role="presentation" class=""><a href="#tabs-tab4" aria-controls="tabs-tab4" role="tab" data-toggle="tab" aria-expanded="false"><span>Perła Jezior</span></a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">

        <div role="tabpanel" data-hotel='savoy' class="tab-pane fade" id="tabs-tab1" style="min-height: 556px;">
          <!-- <h4>Savoy</h4> -->
          <p>Dom Wczasowy Savoy posiada 49 miejsc noclegowych w apartamentach,  pokojach 1, 2 i 3 osobowych o standardzie 3***. Do dnia dzisiejszego zachowuje atmosferę hotelu, z którego korzystali najznakomitsi goście Cara Mikołaja III, a wśród nich Wilhelm II Hohenzollern i prawdopodobnie Rasputin. Przy recepcji znajduje się sala zabaw dla dzieci Figlo Raj. W zabytkowych podziemiach mieści się  Pub & Pizzeria Olimpijska czynna codziennie do 2300.</p>
        </div>
        <div role="tabpanel" data-hotel='mis' class="tab-pane fade" id="tabs-tab2" style="min-height: 556px;">
          <!-- <h4>Miś</h4> -->
          <p>Dom Wczasowy Miś, Bliźniaczy do DW Żbika,  posiada 84 miejsca noclegowe. 6 pokoi 1 – osobowych i 39 - 2 osobowych. Podobnie jak Żbik, wszystkie pokoje mają balkony. Na drugim piętrze znajduje się sala szkoleniowa na 20 – 30 osób idealna do zajęć edukacyjnych zielonych szkół.</p>
        </div>
        <div role="tabpanel" data-hotel='zbik' class="tab-pane fade" id="tabs-tab3" style="min-height: 556px;">
          <!-- <h4>Żbik</h4> -->
          <p>W Domu Wczasowym Żbik przebywać może jednocześnie 90 osób. Są tu  42 pokoje – 2 osobowe, oraz 6 – 1 osobowych. Każdy pokój ma swój balkon. W budynku mieści się Dział Rehabilitacji oraz sala konferencyjno-bankietowa na 40 osób.</p>
        </div>
        <div role="tabpanel" data-hotel='perla' class="tab-pane fade" id="tabs-tab4" style="min-height: 556px;">
          <!-- <h4>Quisque consectetur nisi</h4> -->
          <p>Etiam scelerisque lacus tempor, rhoncus diam vel, gravida felis. Fusce tristique sem et leo aliquam vulputate. Ut eget orci in sapien commodo fringilla. Maecenas rhoncus tortor nec mi congue aliquet. Integer eu turpis scelerisque, iaculis magna non, tempor sem.</p>
        </div>
        <div class='row gallery'>
        </div>
      </div><!-- .tab-content -->
    </div><!-- .tabpanel -->
  </div>
</div>

<!-- modal + carousel -->

<div id='gallery_modal' class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <?php
          gallery_carousel(file_get_contents('php://input'));
        ?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->