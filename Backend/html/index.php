<?php
	include('backend-base.php');
?>
	<div class="columns">
		<div class="column">
			<div class="card box">
				<div class="card-content">
					<b>Upload review materials</b>
					<form id="form" method=POST enctype=multipart/form-data action="">
					<div class="level">
						<div class="file">
							<label class="file-label">
								<input class="file-input" type="file" name="fileToUpload" id="fileToUpload">
								<span class="file-cta">
									<span class="file-label">
										Choose a file…
									</span>
								</span>
							</label>
						</div>
						<input type="submit" class="button is-primary" name="submit" value="upload">
					</div>
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
	if(isset($_POST['submit'])){
		$target_dir = "../../Static/files/review_materials/";
		$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }

	    // Check if file already exists
		// if (file_exists($target_file)) {
		//     echo "Sorry, file already exists.";
		//     $uploadOk = 0;
		// }
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "<script type='text/javascript'>alert('Sorry, there was an error.'); </script>";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    	echo "<script>alert('File uploaded');</script>";
		    } else {
		        echo "<script type='text/javascript'>alert('Sorry, there was an error updating your profile.');</script>";
		    }
		}
	}
?>