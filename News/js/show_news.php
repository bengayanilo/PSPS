<?php
  require('../../Database/config.php');
    
  $selected_news_id = $_POST['selected_news_id'];
  $show_news = mysqli_query($db,"SELECT * FROM news WHERE news_id = '".$selected_news_id."' ORDER BY news_date DESC"); // or die("Error: error with with query");
  $selected_news = mysqli_fetch_array($show_news);
?>