$('document').ready(function(){
  swapBackground('assets/images/zsavoy.jpg');
  // randomTilt('.polaroid');
  galleryCount();

  var resizeTimeoutId;
  window.addEventListener('resize', function(){
    window.clearTimeout(resizeTimeoutId); 
     resizeTimeoutId = window.setTimeout('galleryCount();', 100);
  });

  $('.next-button').on('click', function() {
    gallerySlide('next');
  }); 
  $('.back-button').on('click', function() {
    gallerySlide('back');
  });
});