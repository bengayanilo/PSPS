<?php

	require('../../../Database/config.php');

	$target_dir = "../../../News/images/";
	$target_file = $target_dir . basename($_FILES["new_image"]["name"]);
	$file_name = basename($_FILES["new_image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	if(isset($_POST["submitupdate"])) {
		$check = getimagesize($_FILES["new_image"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}

	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}

	// Check file size
	if ($_FILES["new_image"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}

	// Allow certain file formats
	// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" {
	// 	echo "Sorry, only JPG, JPEG & PNG are allowed.";
	// 	$uploadOk = 0;
	// }

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["new_image"]["tmp_name"], $target_file)) {
			
			$title = $_POST['new_title'];
			$author = $_POST['new_author'];
			$body = $_POST['new_body'];
			$image = (string)$file_name;
			$updatenews = $_POST['updateid']; // From the hidden input in update.php

			$insertdata = "UPDATE news SET title = '$title', 
											author='$author',
											body='$body',
											image_header='$image'
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
				$db->close();
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}

?>