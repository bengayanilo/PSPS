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
	<div class="tile is-vertical news-wrapper is-12" style="width: 100vw;" id="news-section">
		<div class="columns header-columns-wrapper news-header-container">
			<span class="news-header">Latest News</span>
		</div>
		<div class="columns columns-wrapper">
			<?php include '_shownews.php'?>
		</div>
	</div>

<script type="text/javascript">
	$(document).ready(function(){
		var x,y,top,left,down,moved;

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
				moved = true;
				var newX = e.pageX;
				var newY = e.pageY;

				// $("#stuff").scrollTop(top - newY + y);    
				$(".news-carousel-tile").scrollLeft(left - newX + x);    
			}
			else
			{
				moved = false;
			}
		});

    	$("body").mouseup(function(e){
			down = false;
			if(moved)
			{
				$('.news-select').off('click');
			}
			else
			{
				$('.news-select').click(function(event){
					$.ajax({
						type: "POST",
						url: '<?php echo $_SESSION['url']; ?>News/html/show_news.php',
						data: {"id":$(this).attr('id')},
						success: function(data)
						{
							$('#currentnews').html(data)
						}
					});
				});
			}
		});
	});
</script>
</body>