$('document').ready(function(){
  $('.link-scroll').on('click', function(){
    $.ajax({
      type: 'GET',
      url: 'polaroids.php',
      contentType: "application/json; charset=utf-8",
      success: function(data) {
         // data is ur summary
        $('#content').html(data);
      }
    });
  swapBackground('assets/images/backgrounds/ztlo.jpg');
  });
});