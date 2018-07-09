<?php
  require('../../Database/config.php');
    
  $selected_news_id = $_POST['id'];

  // $event = $db->query('SELECT * FROM news WHERE news_id = 1');
  // $event = $stmt->fetch();
  $query = "SELECT * FROM news WHERE news_id = $selected_news_id";
  $results = mysqli_query($db, $query);
  $event = $results->fetch_assoc();
  $date = strtr($event['news_date'], '/', '-');

  $news_author = $event['author'];

  $authordata = "SELECT firstname, surname FROM tbl_users WHERE user_name='$news_author'";
  $author = $db->query($authordata);
  $authordeets = $author->fetch_array(MYSQLI_ASSOC);

  echo 
  	'<div class="tile is-vertical left-side-container">
		<div id="show-news-here" class="news-article-content">
			<h1 class="news-content-title">'. $event['title']. '</h1>
			<p><span class="author-and-date">Posted by '.$authordeets['firstname'].' '.$authordeets['surname'].' on '.date('F d, Y', strtotime($date)).'</span></p>
			<br>
			<p style="max-width: 500px;word-wrap: break-word;">'.nl2br($event['body']). '</p>
		</div>
		<br>
		<div class="comments-header-container"><span class="comments-header">Comments</span></div>
		<div class="fb-comments" data-href="https://psps.ml" data-width="500px" data-numposts="5"></div>
	</div>';
?>