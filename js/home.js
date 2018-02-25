/*$('a').click(function(){
  $('html, body, .below-top-bar').animate({
      scrollTop: $( $(this).attr('href') ).offset().top
  }, 500);
  return false;
});*/

/*$('#ANews').click(function(){
$.animate({
  scrollTop: $('#SNews').position().top
}, 'slow');
});*/

/*$("#ANews").click(function() { 
  $('html, body').animate({
      scrollTop: $("#SNews").offset().top
  }, 2000);
});

$("#ANews").click(function() {
  $('html, body').animate({
      scrollTop: $("#news-section").offset().top
  }, 2000);
});

$("#ANews").click(function() {
  $('html, body').animate({
      scrollTop: $("#TestDiv").offset().top
  }, 2000);
});*/

/*var $root = $('html, body');

$('a[href^="#"]').click(function() {
    var href = $.attr(this, 'href');

    $root.animate({
        scrollTop: $(href).offset().top
    }, 500, function () {
        window.location.hash = href;
    });

    return false;
});*/
$(document).ready(function(){
$(document).on('click','#ANews', function(event) {
  event.preventDefault();
  var target = "#" + this.getAttribute('go');
  $('html, body').animate({
      scrollTop: $(target).offset().top
  }, 1000);
});

$(document).on('click','#AServices', function(event) {
  event.preventDefault();
  var target = "#" + this.getAttribute('go');
  $('html, body').animate({
      scrollTop: $(target).offset().top
  }, 1000);
});

/*$(document).on('click','#AProfessionals', function(event) {
  event.preventDefault();
  var target = "#" + this.getAttribute('target');
  $('html, body').animate({
      scrollTop: $(target).offset().top
  }, 2000);
});*/
  /*$("#ANews").click(function() {
    $('html, .below-top-bar').animate({
        scrollTop: $("#news-section").offset().top
    }, 1000);
  });*/
});