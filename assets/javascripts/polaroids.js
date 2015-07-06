// open hotel page after polaroid click
$('#polaroid_container .polaroid').on('click', function(){
  var hotel = $(this).attr('data-hotel');
  $.ajax({
    type: 'POST',
    url: 'hotels.php',
    data: hotel,
    contentType: "application/json; charset=utf-8",
    success: function(data) {
       // data is ur summary
      $('#content').html(data);
      $.getScript('assets/javascripts/hotels.js');
      $('div[data-hotel='+hotel+']').addClass('active in');
      galleryStart(hotel);
    }
  });
  swapBackground('assets/images/backgrounds/z'+hotel+'.jpg');
});