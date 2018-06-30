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
					<form action="_updatenews.php" method="post" enctype="multipart/form-data">
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
								<input class="file-input" type="file" name="new_image" id="new_image">
								<input type="hidden" name="updateid" value="<?php echo $updatenews; ?>">
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
