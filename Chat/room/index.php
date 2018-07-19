<?php
	session_start();
	include('../../Database/config.php');

	if(isset($_SESSION['id']) && isset($_GET['chat_id'])){
		$query = "SELECT a.user_id,user_name,firstname,surname
					FROM tbl_users a INNER JOIN chat_users b 
					ON a.user_id = b.user_id 
					WHERE b.chat_id=".$_GET['chat_id']." AND a.user_id !=".$_SESSION['id'];
		// $query2 = "SELECT a.user_id,user_name,firstname,surname
		// 			FROM tbl_users a WHERE a.use_id =".$_SESSION['id'];
		$query2 = "SELECT a.user_id,user_name,firstname,surname
					FROM tbl_users a INNER JOIN chat_users b 
					ON a.user_id = b.user_id 
					WHERE b.chat_id=".$_GET['chat_id']." AND a.user_id =".$_SESSION['id'];
		if ($loggedinresult=mysqli_query($db, $query2)){
			$loggedin = mysqli_fetch_row($loggedinresult);
		}
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
	<title>Conversation with <?php echo $row[2].' '.$row[3]?></title>
	<link rel="stylesheet" href="../css/bulma.css">
	<link rel="stylesheet" href="../css/custom.css">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="script.js"></script>

	<div class="tile is-vertical" id="chat-container">
		<span style="font-size: 0.8rem; float: right;">Logged in as <?php if($row){ echo '<b><span style="font-size: 1rem">'.$loggedin[2].' '.$loggedin[3].'</span>&nbsp</b><span style="font-size:0.8rem">('.$loggedin[1].')</span>';} ?></span><br><br>
		<b><span style="font-weight: normal; font-size: 0.8rem">Chatting with </span><span style="font-size: 0.9rem"><?php if($row){ echo $row[2].' '.$row[3]; }?></span></b>
		<div class="tile" id="log-container">
		<div id="new-message-container-container">
		  <div class="hidden-notice" id="new-message-container">
			<a class="is-vertical" href="javascript:;" id="scroll-to-new-messages">
				<div class="is-vertical">
					<div style="line-height: 1rem;"><span id="new-message-alert">New messages</span></div>
					<div style="line-height: 1rem;"><span id="click-notice">(Click to view)</span></div>
				</div>
			</a>
		  </div>
		  <div id="log-outer">
			<div id="log"></div>
		  </div>
		</div>
		</div>

		<form class="tile" id="input" method="post">
			<input class="input" style="width: 100%;" type="text" name="message" id="message"/>
			<button class="button is-primary" type="submit" name="send" id="send">send</button>
			<?php echo '<a class="button is-primary" href="../video/index.php#psps'.$_GET['chat_id'].'" target="_blank">Video</a>' ?>
		</form>
	</div>
</body>
</html>