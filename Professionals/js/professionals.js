$(document).ready(function(){
    $('.professionals-card-link').hover(function() {
        $('.is-white', this).removeClass('is-white').addClass('is-light');
    }, function() {
        $('.is-light', this).removeClass('is-light').addClass('is-white');
    });

    $('#closemodal').click(function(){

    	DayPilot.Modal.close();
    });
});


