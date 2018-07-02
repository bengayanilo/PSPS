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
			<a href="<?php echo $_SESSION['url']; ?>Backend/html/reports/index.php" class="button">
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
					<p class="card-header-title">Edit Report</p>
				</div>
				<div class="card-content">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="field">
							<label> Report Title </label>
							<div class="control">
								<input type="text" class="input" name="rep_title" placeholder="Please enter title" autofocus>
							</div>
						</div>
						
						<div class="field">
							<label> Body </label>
							<div class="control">
								<textarea class="textarea is-info" type="text" name="rep_body" placeholder="What is the report all about"></textarea>
							</div>
						</div>

						<div class="field">
							<label> Patient </label>
							<div class="control">
								<div class="select is-info">
									<select name="news_author">
										<option>Patient 1</option>
										<option>Patient 2</option>
										<option>Patient 3</option>
										<option>Patient 4</option>
									</select>
								</div>
							</div>
						</div>

						<div class="field">
							<label> Comments </label>
							<div class="control">
								<textarea class="textarea is-info" type="text" name="rep_comment" placeholder="Any comments for future reference"></textarea>
							</div>
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
