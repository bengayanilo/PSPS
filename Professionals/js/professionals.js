$(document).ready(function(){
    $('.professionals-card-link').hover(function() {
        $('.is-white', this).removeClass('is-white').addClass('is-light');
    }, function() {
        $('.is-light', this).removeClass('is-light').addClass('is-white');
    });
    var x,y,top,left,down,moved1;

    $(".single-row-container").mousedown(function(e){
        e.preventDefault();
        down = true;
        x = e.pageX;
        y = e.pageY;
        top = $(this).scrollTop();
        left = $(this).scrollLeft();
    });

    $("body").mousemove(function(e){
        if(down)
        {
            moved1 = true;
            var newX = e.pageX;
            var newY = e.pageY;

            // $("#stuff").scrollTop(top - newY + y);    
            $(".single-row-container").scrollLeft(left - newX + x);
        }
        else
        {
            moved1 = false;
        }
    });

    $("body").mouseup(function(e){
        down = false;
        if(moved1)
        {
            $('.professionals-card-link').click(false);
            // $('.professionals-card-link').off('click');
        }
        else if(moved1 == false)
        {
            $('.professionals-card-link').click(function(e){
                showdoctor($row['user_id']);
                // $(this).attr("onclick", "showdoctor('.$row['user_id'].')");
            });
        }
    });
    $('#closemodal').click(function(){

    	DayPilot.Modal.close();
    });
});


