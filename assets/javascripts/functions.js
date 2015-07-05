function swapBackground (url) {
  $('#background-swapper').append("<div class='background new' style='opacity: 0;'></div>");
  $('.background.new').css('background-image', 'url(' + url + ')');
  $('.background.new').animate({opacity: 1}, 0, 'linear');
}
// function randomTilt(cls) {
//   $(cls).each(function(){
//     $(this).css('transform', 'rotate(' + (Math.floor(Math.random() * 10) + -5) + 'deg)');
//   });
// }
function galleryCount() {
  count = Math.floor($('.gallery-wrapper').width() / $('.polaroid').width());
  for(var i=0, l=$('.polaroid').length; i<l; i++) {
    if (i<count) {
      $('.polaroid').eq(i).css({'transform' : 'rotate(' + (Math.floor(Math.random() * 10) + -5) + 'deg) scale(1)', 'display' : 'inline-block'});
    }
    else {
      $('.polaroid').eq(i).css({'transform' : 'scale(0)', 'display' : 'none'});
    }
  }
}
function gallerySlide(direction) {
  var pointer = false;
  if (direction=='next') {
    for(var i=0, l=$('.polaroid').length; i<l; i++) {
      if ($('.polaroid').eq(i).css('display')!='none' && pointer==false) {
        hidePolaroid($('.polaroid').eq(i),'left');
        pointer = true;
      }
      else if ($('.polaroid').eq(i).css('display')=='none' && pointer==true) {
        showPolaroid($('.polaroid').eq(i));
        break;
      }
    }
  }
  else if (direction=="back") {
    for(var i=0, l=$('.polaroid').length; i<l; i++) {
      if ($('.polaroid').eq(i).css('display')!='none' && pointer==false) {
        if (i==0) { //can't slide farther back
          break;
        }
        showPolaroid($('.polaroid').eq(i-1));
        pointer = true;
      }
      else if ($('.polaroid').eq(i).css('display')=='none' && pointer==true) {
        hidePolaroid($('.polaroid').eq(i-1),'right');
      }
      else if (i==l-1) {
        hidePolaroid($('.polaroid').eq(i),'right');
      }
    }
  }
}
function showPolaroid(pol) {
  pol.show(0,function() {
    pol.css({'transform' : 'rotate(' + (Math.floor(Math.random() * 10) + -5) + 'deg) scale(1)', 'margin' : '0'});
  });
}
function hidePolaroid(pol, side) {
  if (side=='left') {
    pol.css({'margin-left' : -pol.width(), 'transform' : 'rotate(0deg) scale(0)'});
  }
  else if (side=='right') {
    pol.css({'margin-right' : -pol.width(), 'transform' : 'rotate(0deg) scale(0)'});
  }
  setTimeout(function(){
    pol.css({'display' : 'none'});
  },600);
}