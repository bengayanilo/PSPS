<?php
  require('../../Database/config.php');
    
  $selected_news_id = $_POST['id'];

  // $event = $db->query('SELECT * FROM news WHERE news_id = 1');
  // $event = $stmt->fetch();
  $query = "SELECT * FROM news WHERE news_id = $selected_news_id";
  $results = mysqli_query($db, $query);
  $event = $results->fetch_assoc();
  $date = strtr($event['news_date'], '/', '-');

  echo 
  	'<div class="tile is-vertical">
		<div id="show-news-here" class="news-article-content">
			<h1 class="news-content-title">'. $event['title']. '</h1>
			<p><span class="author-and-date">Posted by '.$event['author'].' on '.date('F d, Y', strtotime($date)).'</span></p>
			<br>
			<p style="max-width: 500px;word-wrap: break-word;">'.nl2br($event['body']). '</p>
		</div>
		<br>
		<div class="comments-header-container"><span class="comments-header">Comments</span></div>
		<div class="fb-comments" data-href="https://psps.ml" data-width="500px" data-numposts="5"></div>
	</div>';
?>