<?php
	
	// $newsdata = mysqli_query($db,"SELECT * FROM news ORDER BY news_date DESC"); // or die("Error: error with with query");
	// $forfirstrow = mysqli_query($db,"SELECT * FROM news ORDER BY news_date DESC"); // or die("Error: error with with query");
	// $startingnews = mysqli_fetch_array($forfirstrow);
	// $row = mysqli_fetch_array($newsdata);

	$newsdata = "SELECT * FROM news ORDER BY news_date DESC";
	$forfirstrow = "SELECT * FROM news ORDER BY news_date DESC";

	$startingnews = $db->query($forfirstrow)->fetch_assoc();
	$row = $db->query($newsdata)->fetch_assoc();

	echo '
	<!-- News Left Side -->
	<div class="column news-left-side">
		<div class="tile is-vertical news-selector-container">
			<!-- Featured News -->
			<div class="tile is-parent news-parent-tile">
				<div class="tile news-featured-card">
					<div class="news-featured-image-container">
						<img class="news-featured-image" src="'.$_SESSION['url'].'Static/images/news/'. $row['image_header'] .'">
					</div>
					<div class="news-featured-info">
						<h1 class="news-featured-title">'. $row['title'] .'</h1>
						<p class="news-featured-desc">'. $row['body'] .'</p>
					</div>
				</div>
			</div>
			<!-- Featured News End -->

			<!-- Older News Carousel -->
			<div class="tile is-parent news-carousel-tile">
				<!-- Older News 1 -->
				<a id="'. $row['news_id'] .'" class="news-select" href="javascript:;"><div class="tile news-older-card is-vertical">
					<div class="news-older-image-container">
						<img class="news-older-image" src="'.$_SESSION['url'].'Static/images/news/'. $row['image_header'] .'">
					</div>
					<div class="news-older-info">
						<h1 class="news-older-title">'. $row['title'] .'</h1>
					</div>
				</div></a>
				<!-- Older News 1 End -->';

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
				<!-- Older News Carousel End -->
			</div>
		</div>
		<!-- News Left Side End -->
				

	<!-- News Right Side -->
	<div class="column news-right-side">
		<div id="show-news-here" class="news-article-content">
			<h1 class="news-content-title">'. $startingnews['title']. '</h1>
			<br>
			<p>'. nl2br($startingnews['body']). '</p>
		</div>
	</div>
	<!-- News Right Side End -->';
?>