<!-- <!DOCTYPE html>
<html> -->
<?php
	require('../../Database/config.php');
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
			<?php include '_shownews.php'?>
		</div>
	</div>
</body>