<?php
	require('../../../Database/config.php');
	include('../backend-base.php');
?>

<div class="column">
	<div class="columns">
		<div class="column">
			<a href="/backend/users" class="button">
				<span class="icon is-small">
					<i class="fa fa-long-arrow-left"></i>
				</span>
				<span>Back</span>
			</a>
		</div>
	</div>
	<div class="columns">
		<div class="column">
			<div class="card box">
				<div class="card-header">
					<p class="card-header-title">Create news</p>
				</div>
				<div class="card-content">
					<form action="" method="post">
						<!-- Title of the News -->
						<div class="field">
							<label> News title </label>
							<div class="control">
								<input type="text" class="input" name="news_title" placeholder="Please enter title" autofocus>
							</div>
						</div>
						<!-- Author -->
						<div class="field">
							<label> Author </label>
							<div class="control">
								<div class="select is-info">
									<select name="news_author">
										<option>Select author</option>
										<?php include '_author.php' ?> 
									</select>
								</div>
							</div>
						</div>
						<!-- Body of the news -->
						<div class="field">
							<label> Body </label>
							<div class="control">
								<textarea class="textarea is-info" type="text" name="news_body" placeholder="Please enter the body of the news"></textarea>
							</div>
						</div>
						<hr>
						<!-- Image file for the news -->
						<div class="file">
							<label class="file-label">
								<input class="file-input" type="file" name="news_image">
								<span class="file-cta">
									<span class="file-icon">
									<i class="fas fa-upload"></i>
									</span>
									<span class="file-label">
										Upload image header for news
									</span>
								</span>
							</label>
						</div>
						<hr>
						<!-- Submit -->
						<input type="submit" class="button is-primary" name="submitnews" value="Submit">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end part of backend base -->
				</div>
			</div>

		</div>
	</div>

</body>
</html>
<?php
	if (isset($_POST['submitnews'])){

		$title = $_POST['news_title'];
		$author = $_POST['news_author'];
		$body = $_POST['news_body'];
		// $image = $_POST['news_image'];

		$insertdata = "INSERT INTO news(title,author,body,image_header,news_date)
							VALUES ('$title','$author','$body','image',NOW())";
										
		$insert = $db->query($insertdata);

		if ($insert) {

			echo '<script type="text/javascript">
					window.location.replace("index.php");
				</script>';
		} else {
			echo "Error posting news: " . $db->error;
		};
	};

	$db->close();
?>