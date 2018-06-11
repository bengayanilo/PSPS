<?php
  session_start();
  if(!isset($_SESSION['id'])){
    header('Location: ../selection');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <script type='text/javascript' src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
</head>
<body>
  <div class="copy">Send your URL to a friend to start a video call</div>
  <video id="localVideo" autoplay muted></video>
  <video id="remoteVideo" autoplay></video>
  <script src="script.js"></script>
</body>
</html>