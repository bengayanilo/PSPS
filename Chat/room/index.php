<?php
	session_start();
	include('../../Database/config.php');

	if(isset($_SESSION['id']) && isset($_GET['chat_id'])){
		$query = "SELECT a.user_id,user_name 
					FROM tbl_users a INNER JOIN chat_users b 
					ON a.user_id = b.user_id 
					WHERE b.chat_id=".$_GET['chat_id']." AND a.user_id !=".$_SESSION['id'];
		
		if ($result=mysqli_query($db, $query)){
			$row = mysqli_fetch_row($result);
		}
	}
	else{
		header("Location:../selection/index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PSPS-Chat</title>
	<link rel="stylesheet" href="../css/bulma.css">
	<link rel="stylesheet" href="../css/custom.css">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="script.js"></script>

	<div class="tile is-vertical" id="chat-container">
		<b><?php if($row){ echo $row[1]; }?></b>
		<div class="tile" id="log-container">
			<div id="log"></div>
		</div>

		<form class="tile" id="input" method="post">
			<input class="input" style="width: 100%;" type="text" name="message" id="message"/>
			<button class="button is-primary" type="submit" name="send" id="send">send</button>
			<?php echo '<a class="button is-primary" href="../video/index.php#psps'.$_GET['chat_id'].'">Video</a>' ?>
		</form>
	</div>
</body>
</html>