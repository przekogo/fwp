$('document').ready(function(){
  galleryInit();
//init gallery on window resize
  var resizeTimeoutId;
  window.addEventListener('resize', function(){
    window.clearTimeout(resizeTimeoutId); 
     resizeTimeoutId = window.setTimeout('galleryCount();', 100);
  });
//additional triggers for hotel tab swapping
  $('.tabpanel').on('shown.bs.tab', function() {
    galleryStart($('.tab-pane.active').attr('data-hotel'));
    swapBackground('assets/images/backgrounds/z'+$('.tab-pane.active').attr('data-hotel')+'.jpg');
  })
  $('.nav.nav-tabs').on('click', function() {
    $('.row.gallery').fadeOut(300, function(){$('.row.gallery').fadeIn(300)});
  })
});
