<?php
	session_start();
	if(!isset($_SESSION['id']) || !isset($_GET['target'])){
		header('Location: ../selection');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/styles.css">
</head>
<body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdn.pubnub.com/pubnub-3.7.14.min.js"></script>
	<script src="https://cdn.pubnub.com/webrtc/webrtc.js"></script>
	
	<div id="vid-box"></div>

	<form name="loginForm" id="login" onsubmit="return login(this);">
		<input type="text" name="username" id="username" placeholder="Pick a username!" />
		<input type="submit" name="login_submit" value="Log In">
	</form>

	<form name="callForm" id="call" onsubmit="return makeCall(this);">
		<input type="text" name="number" placeholder="Enter user to dial!" />
		<input type="submit" value="Call"/>
	</form>


	<script type="text/javascript">
		var video_out = document.getElementById("vid-box");

		function login(form) {
			var phone = window.phone = PHONE({
			    number        : form.username.value || "Anonymous", // listen on username line else Anonymous
			    publish_key   : 'pub-c-de012e19-db08-478e-922b-44354c43fce1',
			    subscribe_key : 'sub-c-03cf889a-19e8-11e8-91c1-eac6831c625c',
			});	
			phone.ready(function(){ form.username.style.background="#55ff5b"; });
			phone.receive(function(session){
			    session.connected(function(session) { video_out.appendChild(session.video); });
			    session.ended(function(session) { video_out.innerHTML=''; });
			});
			return false; 	// So the form does not submit.
		}

		function makeCall(form){
			if (!window.phone) alert("Login First!");
			else phone.dial(form.number.value);
			return false;
		}

		
	</script>
</body>
</html>