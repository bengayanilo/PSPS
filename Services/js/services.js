$(document).ready(function(){
    $('.is-white', '#services-section').hover(function() {
        $(this).removeClass('is-white').addClass('is-light');
    }, function() {
        $(this).removeClass('is-light').addClass('is-white');
    });

    $('#applications').hover(function(e) {
        e.preventDefault();
        $(this).parent().closest('#applications-hover').css('height', '5vh !important').stop().fadeOut(400, function() {
            $('#services-applications-pyramid').stop().fadeIn(400);
        });
    });

    $('#applications').click(function(e) {
        e.preventDefault();
        $(this).parent().closest('#applications-hover').css('height', '5vh !important').stop().fadeOut(400, function() {
            $('#services-applications-pyramid').stop().fadeIn(400);
        });
    });

    $('#services-applications-pyramid').parent().hover(function(e) {
        e.preventDefault();
        $('#services-applications-pyramid', '#services-section').stop().fadeOut(400, function() {
            $('#applications', '#services-section').parent().closest('.applications-hover').stop().fadeIn(400);
        });
    });

    // $('#services-applications-pyramid').mouseleave(function(e) {
    //     e.preventDefault();
    //     $('#services-applications-pyramid', '#services-section').stop().fadeOut(400, function() {
    //         $('#applications', '#services-section').parent().closest('.applications-hover').stop().fadeIn(400);
    //     });
    // });
});
