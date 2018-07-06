<?php
	$newsdata = "SELECT * FROM news ORDER BY news_date DESC";
	// $date = "SELECT news_date FROM news ORDER BY news_date DESC";

	$startingnews = $db->query($newsdata)->fetch_assoc();
	$row = $db->query($newsdata);
	$date = strtr($startingnews['news_date'], '/', '-');
	// $dateFormatted = date('d-F-Y', strtotime($row['news_date']));

	echo '
	<!-- News Left Side -->
	<div class="column news-left-side">
	<div class="tile is-vertical">
	<div id="show-news-here" class="news-article-content">
		<h1 class="news-content-title">'. $startingnews['title']. '</h1>
		<p><span class="author-and-date">Posted by '.$startingnews['author'].' on '.date('F d, Y', strtotime($date)).'</span></p>
		<br>
		<p>'.nl2br($startingnews['body']). '</p>
	</div>
	<br>
	<div class="comments-header-container"><span class="comments-header">Comments</span></div>
	<div class="fb-comments" data-href="https://psps.ml" data-width="500px" data-numposts="5"></div>
</div>
		</div>
		<!-- News Left Side End -->
				

		<!-- News Right Side -->
		<div class="column news-right-side">

		<div class="tile is-vertical news-selector-container">
		<!-- Featured News -->
		<div class="tile is-parent news-parent-tile">
			<div class="tile news-featured-card">
				<div class="news-featured-image-container">
					<img class="news-featured-image" src="'.$_SESSION['url'].'Static/images/news/'. $startingnews['image_header'] .'">
					<div class="news-featured-info">
						<h1 class="news-featured-title">'. $startingnews['title'] .'</h1>
						<p class="news-featured-desc">'. $startingnews['body'] .'</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Featured News End -->

		<!-- Older News Carousel -->
		<div class="news-carousel-tile-container">
		<div class="tile is-parent news-carousel-tile">';

		if (mysqli_num_rows($row) > 0){
			while ($result = mysqli_fetch_assoc($row)) {
				
				echo '
				<!-- Older News 2 -->
				<a id="'. $result['news_id'] .'" class="news-select" href="javascript:;"><div class="tile news-older-card is-vertical">
					<div class="news-older-image-container">
						<img class="news-older-image" src="'.$_SESSION['url'].'Static/images/news/'.$result['image_header'].'">
					</div>
					<div class="news-older-info">
						<h1 class="news-older-title">'.$result['title'].'</h1>
					</div>
				</div></a>
				<!-- Older News 2 End -->';
			}
		};

echo '
				</div>
				</div>
			<!-- Older News Carousel End -->
		</div>
		</div>
		<!-- News Right Side End -->';
?>