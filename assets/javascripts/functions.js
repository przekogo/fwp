//changes page background
function swapBackground (url) {
  $('#background-swapper').append("<div class='background new' style='opacity: 0;'></div>");
  $('.background.new').css('background-image', 'url(' + url + ')');
  $('.background.new').animate({opacity: 1}, 0, 'linear');
  setTimeout(function() {
    $('.background.old')[0].remove();
    $('.background.new').removeClass('new').addClass('old');
  },1500);
}
//counts up how many polaroids can fit the gallery
function galleryCount() {
  count = Math.floor(($('.gallery-wrapper').width()-15) / $('.polaroid').width()) || 1;
  $.each( $('.polaroid'), function() {
    $(this).css({'margin' : '0px', 'display' : 'none'});
  })
  for(var i=0, l=$('.polaroid').length; i<l; i++) {
    if (i<count) {
      $('.polaroid').eq(i).css({'transform' : 'rotate(' + (Math.floor(Math.random() * 10) + -5) + 'deg) scale(1)', 'display' : 'inline-block'});
      $('.polaroid').eq(i).attr({'shown' : 'yes'});
    }
    else {
      $('.polaroid').eq(i).css({'transform' : 'rotate(0deg) scale(0)', 'margin' : '0px -200px 0px 0px', 'display' : 'none'});
      $('.polaroid').eq(i).attr({'shown' : 'no'});
    }
  }
}
//main function to initialize gallery (name of folder)
function galleryStart(gallery) {
  $.ajax({
    type: 'POST',
    url: 'gallery.php',
    data: gallery,
    contentType: "application/json; charset=utf-8",
    success: function(data) {
       // data is ur summary
      $('.row.gallery').html(data);
      galleryCount();
    }
  });
  $.ajax({
    type: 'POST',
    url: 'gallery_carousel.php',
    data: gallery,
    contentType: "application/json; charset=utf-8",
    success: function(data) {
      $('#gallery_modal .modal-body').html(data);
      galleryInit();
    }
  })
}
//initialize gallery buttons and modal
function galleryInit() {
//gallery sliding
  $('.next-button').on('click', function() {
    gallerySlide('next');
  }); 
  $('.back-button').on('click', function() {
    gallerySlide('back');
  });
//zoom gallery
  $('.polaroid').on('click', function() {
    $('#gallery_modal').modal();
    $('#gallery_modal div').removeClass('active');
    $('.item img[src="'+$(this).find('img').attr('src')+'"]').parent().addClass('active');
  });
}
//gallery buttons sliding
function gallerySlide(direction) {
  var pointer = false;
  if (direction=='next') {
    if ($('.polaroid').last().attr('shown')=='yes') {
      return;
    }
    for(var i=0, l=$('.polaroid').length; i<l; i++) {
      if ($('.polaroid').eq(i).css('display')!='none' && pointer==false && $('.polaroid').eq(i).attr('shown')=='yes') {
        hidePolaroid($('.polaroid').eq(i),'left');
        pointer = true;
      }
      else if ($('.polaroid').eq(i).css('display')=='none' && pointer==true) {
        showPolaroid($('.polaroid').eq(i));
        return;
      }
    }
  }
  else if (direction=="back") {
    for(var i=0, l=$('.polaroid').length; i<l; i++) {
      if ($('.polaroid').eq(i).css('display')!='none' && pointer==false) {
        if (i==0) { //can't slide farther back
          return;
        }
        showPolaroid($('.polaroid').eq(i-1));
        pointer = true;
      }
      else if ($('.polaroid').eq(i).attr('shown')=='no' && pointer==true) {
        hidePolaroid($('.polaroid').eq(i-1),'right');
      }
      else if (i==l-1) {
        hidePolaroid($('.polaroid').eq(i),'right');
      }
    }
  }
}
//functions for showing/hiding a single polaroid in gallery
function showPolaroid(pol) {
  pol.show(0,function() {
    pol.css({'transform' : 'rotate(' + (Math.floor(Math.random() * 10) + -5) + 'deg) scale(1)', 'margin' : '0'});
    pol.attr({'shown' : 'yes'});
  });
}
function hidePolaroid(pol, side) {
  if (side=='left') {
    pol.css({'margin-left' : -pol.width(), 'transform' : 'rotate(0deg) scale(0)'});
  }
  else if (side=='right') {
    pol.css({'margin-right' : -pol.width(), 'transform' : 'rotate(0deg) scale(0)'});
  }
  pol.attr({'shown' : 'no'});
  setTimeout(function(){
    pol.css({'display' : 'none'});
  },600);
}