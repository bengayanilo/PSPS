<?php

	require('../../../Database/config.php');

	$target_dir = "../../../Static/images/news/";
	$target_file = $target_dir . basename($_FILES["news_image"]["name"]);
	$file_name = basename($_FILES["news_image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	if(isset($_POST["submitnews"])) {
		$check = getimagesize($_FILES["news_image"]["tmp_name"]);
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
	if ($_FILES["news_image"]["size"] > 500000) {
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
		if (move_uploaded_file($_FILES["news_image"]["tmp_name"], $target_file)) {
			
			$title = $_POST['news_title'];
			$author = $_POST['news_author'];
			$body = $_POST['news_body'];
			$image = (string)$file_name;

			$insertdata = "INSERT INTO news(title,author,body,image_header,news_date)
								VALUES ('$title','$author','$body','$image',NOW())";
											
			$insert = $db->query($insertdata);

			if ($insert) {

				echo '<script type="text/javascript">
						window.location.replace("index.php");
					</script>';
			} else {
				echo "Error posting news: " . $db->error;
			};

			$db->close();
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}

?>