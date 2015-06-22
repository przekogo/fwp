function swapBackground (url) {
  $('#background-swapper').append("<div class='background new' style='opacity: 0;'></div>");
  $('.background.new').css('background-image', 'url(' + url + ')');
  $('.background.new').animate({opacity: 1}, 0, 'linear');
}
function randomTilt(cls) {
  $(cls).each(function(){
    $(this).css('transform', 'rotate(' + (Math.floor(Math.random() * 10) + -5) + 'deg)');
  });
}