$(document).ready(function(){
    $('.news-select').click( function(event){
        var newsid = $(this).attr('id');
        // alert(newsid);
        $.ajax({
            type: "POST",
            // url: "<?php echo $_SESSION['url']; ?>News/js/show_news.php",
            url: 'show_news.php',
            dataType: "JSON",
            data: ({selected_news_id:newsid}),
            success: function(data){
                console.log(data);
            }
        });
        $.ajax({
            type: "POST",
            // url: "<?php echo $_SESSION['url']; ?>News/js/show_news.php",
            url: 'show_news.php',
            dataType: "JSON",
            success: function(data)
            {
                console.log(data);
                
                $('#show-news-here').html(output);
            }
        });
    });
});