$(document).ready(function(){
    // $(document).click(function(e) {
    //     // $(".is-active").removeClass(".is-active");
    //     $('.is-active').hide();
    // });
    $("body").click(function(e) {
        e.stopPropagation(); // This is the preferred method.
        // return false;        // This should not be used unless you do not want
                             // any click events registering inside the div
    });

    // $('.navbar-burger').click(function(){
    //     $('.navMenubd-example').addClass('is-active');
    // });
    // $('.navbar-item', '#navMenubd-example').click(function(){
    //     $(this).closest('#navMenubd-example').toggleClass('is-active');
    // });

    // $(".navbarLinks").click(function(){
    //     $('.is-active').removeClass('.is-active');
    // });

    // $('html', 'body').click(function(){
    //     if($('#navMenubd-example').hasClass('is-active'))
    //     {
    //         $(this).removeClass('is-active');
    //     }
    // });


    // function burger(e) {

    // }
    // var pressedDown;

    // $(".navbar-menu").mousedown(function(e){
    //     pressedDown = true;
    // });

    // $(".navbar-menu").mouseup(function(e){
    //     if(pressedDown)
    //     {
    //         $(".navbar-item", ".navbar-menu").click(function(e){
    //             $(this).closest(".navMenubd-example").removeClass("is-active");
    //         });
    //         // $(this).toggleClass("is-active");
    //     }
    //     pressedDown = false;
    // });



    // $(".navbar-burger").on("click", function() {
    //     $(".navbar-menu").toggle();
    // });
});