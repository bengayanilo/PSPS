function loadAPI() {
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
}

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
                var output = '';
                for(var i in data){
                    output += "<h1 class='news-content-title'><?php echo $selected_news['title']; ?></h1>"+
                    "<br>"+
                    "<p><?php echo nl2br($selected_news['body']); ?></p>";
                }
                $('#show-news-here').html(output);
            }
        });
        loadAPI();
    });
});