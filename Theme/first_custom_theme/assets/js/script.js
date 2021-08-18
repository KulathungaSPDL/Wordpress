//when click menu auto hide toggler
$('.nav-link').on('click',function() {
    $('.navbar-collapse').collapse('hide');
});

//hide navbar when scrolling
$(window).on('scroll', function (e) {
  $('.navbar-collapse').collapse('hide');
})

//change colour when off main banner
var top1 = $('.main-banner').offset().top;
var top2 = $('.main').offset().top;

$(document).scroll(function() {
  var scrollPos = $(document).scrollTop();
  if (scrollPos >= top1 && scrollPos < top2) {
    $('#navbar').css('background-color', 'rgba(0, 0, 0, 0.0)');
  } else if (scrollPos >= top2) {
    $('#navbar').css('background-color', 'rgba(0, 0, 0, 0.4)');
  }
});