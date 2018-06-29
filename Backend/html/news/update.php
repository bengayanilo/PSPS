<?php
	require('../../../Database/config.php');
	
	$updatenews = $_GET['update_id'];
	$selectnews = "SELECT title, author, body, image_header FROM news WHERE news_id=$updatenews";

	$newsdata = $db->query($selectnews);
	$data = $newsdata->fetch_assoc();

	include('../backend-base.php');
?>
	<div class="columns">
		<div class="column">
			<a href="<?php echo $_SESSION['url']; ?>Backend/html/news/index.php" class="button">
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
					<p class="card-header-title">Edit news details</p>
				</div>
				<div class="card-content">
					<form action="" method="post">
						<div class="field">
							<label> Title </label>
							<div class="control">
								<input type="text" class="input" name="new_title" value="<?php echo $data['title']; ?>" autofocus>
							</div>
						</div>
						<div class="field">
							<label> Author </label>
							<div class="control">
								<div class="select is-info">
									<select name="new_author">
										<option>Select author</option>
										<?php include '_author.php' ?> 
									</select>
								</div>
							</div>
						</div>
						<div class="field">
							<label> Body </label>
							<div class="control">
								<textarea class="textarea is-info" type="text" name="new_body"><?php echo $data['body']; ?></textarea>
							</div>
						</div>
						<hr>
						<div class="file">
							<label class="file-label">
								<input class="file-input" type="file" name="new_image">
								<span class="file-cta">
									<span class="file-icon">
									<i class="fas fa-upload"></i>
									</span>
									<span class="file-label">
										Update image header for news
									</span>
								</span>
							</label>
						</div>
						<hr>
						<input type="submit" class="button is-primary" name="submitupdate" value="Submit">
					</form>
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
	if (isset($_POST['submitupdate'])){

		$title = $_POST['new_title'];
		$author = $_POST['new_author'];
		$body = $_POST['new_body'];
		// $image = $_POST['new_image'];

		$insertdata = "UPDATE news SET title = '$title', 
										author='$author',
										body='$body'
										-- image_header='$image'
									WHERE news_id='$updatenews'";
										
		$insert = $db->query($insertdata);

		if ($db->query($insertdata) === TRUE) {

			echo '<script type="text/javascript"> 
					alert("Data successfully updated");
					window.location.replace("index.php");
				</script>';
		} else {
			echo "Error updating record: " . $db->error;
		};
	};

	$db->close();
?>