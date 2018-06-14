$(document).ready(function(){
    $('.is-light').hover(function() {
        $(this).removeClass('is-light').addClass('is-dark');
    }, function() {
        $(this).removeClass('is-dark').addClass('is-light');
    });
});
