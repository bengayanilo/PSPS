<!-- <!DOCTYPE html>
<html> -->
<?php
  require('../../Database/config.php');
	
	$newsdata = mysqli_query($db,"SELECT * FROM news ORDER BY news_date DESC"); // or die("Error: error with with query");
	$forfirstrow = mysqli_query($db,"SELECT * FROM news ORDER BY news_date DESC"); // or die("Error: error with with query");
  $startingnews = mysqli_fetch_array($forfirstrow);
  $row = mysqli_fetch_array($newsdata);
?>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Home - Psyche Solution Psychological Services</title>
<!-- <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" /> -->
<!-- <link rel="stylesheet" type="text/css" media="screen" href="../css/bulma-timeline.sass" /> -->
<!-- <link rel="icon" href="../images/logo.png"> -->
<!-- <script src="../js/news.js"></script> -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>News/css/news.css">
<script src="<?php echo $_SESSION['url']; ?>News/js/news.js"></script>

</head>
<body class="news-body">
  <div class="tile news-wrapper is-12" id="news-section">
    <div class="columns columns-wrapper">

      <!-- News Left Side -->
      <div class="column news-left-side">
        <div class="tile is-vertical news-selector-container">
          <!-- Featured News -->
          <div class="tile is-parent news-parent-tile">
            <div class="tile news-featured-card">
              <div class="news-featured-image-container">
                <img class="news-featured-image" src="<?php echo $_SESSION['url']; ?>Static/images/news/<?php echo $row['image_header']; ?>">
              </div>
              <div class="news-featured-info">
                <h1 class="news-featured-title"><?php echo $row['title']; ?></h1>
                <p class="news-featured-desc"><?php echo $row['body']; ?></p>
              </div>
            </div>
          </div>
          <!-- Featured News End -->

          <!-- Older News Carousel -->
          <div class="tile is-parent news-carousel-tile">
            <!-- Older News 1 -->
            <a id="<?php echo $row['news_id']; ?>" class="news-select" href="javascript:;"><div class="tile news-older-card is-vertical">
              <div class="news-older-image-container">
                <img class="news-older-image" src="<?php echo $_SESSION['url']; ?>Static/images/news/<?php echo $row['image_header']; ?>">
              </div>
              <div class="news-older-info">
                <h1 class="news-older-title"><?php echo $row['title']; ?></h1>
              </div>
            </div></a>
            <!-- Older News 1 End -->

            <!-- Older News 2 -->
            <?php while($row = mysqli_fetch_array($newsdata)) {
            echo
            '<a id="'.$row['news_id'].'" class="news-select" href="javascript:;"><div class="tile news-older-card is-vertical">
              <div class="news-older-image-container">
                <img class="news-older-image" src="'.$_SESSION['url'].'Static/images/news/'.$row['image_header'].'">
              </div>
              <div class="news-older-info">
                <h1 class="news-older-title">'.$row['title'].'</h1>
              </div>
            </div></a>'; }
            ?>
            <!-- Older News 2 End -->
          </div>
          <!-- Older News Carousel End -->
        </div>
      </div>
      <!-- News Left Side End -->

      <!-- News Right Side -->
      <div class="column news-right-side">
        <div id="show-news-here" class="news-article-content">
          <h1 class="news-content-title"><?php echo $startingnews['title']; ?></h1>
          <br>
          <p><?php echo nl2br($startingnews['body']); ?></p>
        </div>
      </div>
      <!-- News Right Side End -->

    </div>
  </div>
</body>