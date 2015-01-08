function collage() {
  $('.collage').css('background-color', 'transparent');
  $('.collage').collagePlus();
}
collage();

var resizeTimer = null;
$(window).bind('resize', function() {
  $('.collage img').css('opacity', 0);
  $('.collage').css('background-color', '#dedede');
  if (resizeTimer) clearTimeout(resizeTimer);
  resizeTimer = setTimeout(collage, 200);
});
