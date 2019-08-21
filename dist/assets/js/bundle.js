var $ = jQuery;
$(window).scroll(function() {
  if ($(this).scrollTop() > 0) {
    $('#nav').addClass('fixed');
  } else {
    $('#nav').removeClass('fixed');
  }
});
