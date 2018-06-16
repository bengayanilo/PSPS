$(document).ready(function(){
    // Add smooth scrolling to all links
    var navBarHeight = $(".navbar").outerHeight();
    // $('.wrapper').css('margin-top', navBarHeight/2);
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
        
        var navBarHeight = $(".navbar").outerHeight();
        // Store hash
        var target = this.hash,
        $target = $(target);
        // var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        // $('html, body').animate({
        $('.wrapper').stop().animate({
        //   scrollTop: $(hash).offset().top
          scrollTop: $target.offset().top + $('.wrapper').scrollTop() - navBarHeight
        }, 800, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          // window.location.hash = hash;
        });
      } // End if
    });
  });

// // ------------------------------
// // https://twitter.com/mattsince87
// // ------------------------------

// function scrollNav() {
//     $('.nav a').click(function(){  
//       //Toggle Class
//       $(".active").removeClass("active");      
//       $(this).closest('li').addClass("active");
//       var theClass = $(this).attr("class");
//       $('.'+theClass).parent('li').addClass('active');
//       //Animate
//       $('html, body').stop().animate({
//           scrollTop: $( $(this).attr('href') ).offset().top - 160
//       }, 400);
//       return false;
//     });
//     $('.scrollTop a').scrollTop();
//   }
//   scrollNav();