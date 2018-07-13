$(document).ready(function(){
    // $('.news-select').click( function(event){
    //     var newsid = $(this).attr('id');
    //     // alert(newsid);
    //     $.ajax({
    //         type: "POST",
    //         // url: "<?php echo $_SESSION['url']; ?>News/js/show_news.php",
    //         url: 'show_news.php',
    //         dataType: "JSON",
    //         data: ({selected_news_id:newsid}),
    //         success: function(data){
    //             console.log(data);
    //         }
    //     });
    //     $.ajax({
    //         type: "POST",
    //         // url: "<?php echo $_SESSION['url']; ?>News/js/show_news.php",
    //         url: 'show_news.php',
    //         dataType: "JSON",
    //         success: function(data)
    //         {
    //             console.log(data);
                
    //             $('#show-news-here').html(output);
    //         }
    //     });
    // });

    var x,y,top,left,down;

    $(".news-carousel-tile").mousedown(function(e){
        e.preventDefault();
        down = true;
        x = e.pageX;
        y = e.pageY;
        top = $(this).scrollTop();
        left = $(this).scrollLeft();
    });

    $("body").mousemove(function(e){
        if(down){
            var newX = e.pageX;
            var newY = e.pageY;

            // $("#stuff").scrollTop(top - newY + y);    
            $(".news-carousel-tile").scrollLeft(left - newX + x);    
        }
    });

    $("body").mouseup(function(e){down = false;});
});