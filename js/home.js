/*$('a').click(function(){
  $('html, body, .below-top-bar').animate({
      scrollTop: $( $(this).attr('href') ).offset().top
  }, 500);
  return false;
});

$('#ANews').click(function(){
$.animate({
  scrollTop: $('#SNews').position().top
}, 'slow');
});*/

$("#ANews").click(function() { 
  $('html, body').animate({
      scrollTop: $("#SNews").offset().top
  }, 2000);
});