$(document).ready(function(){
    $('.is-white', '#services-section').hover(function() {
        $(this).removeClass('is-white').addClass('is-light');
    }, function() {
        $(this).removeClass('is-light').addClass('is-white');
    });
});
