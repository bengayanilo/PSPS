<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Password Reset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>PasswordReset/css/passwordreset.css" />
    <script src="<?php echo $_SESSION['url']; ?>Static/js/jquery.min.js"></script>
    <script src="<?php echo $_SESSION['url']; ?>PasswordReset/js/passwordreset.js"></script>
    <link rel="icon" href="<?php echo $_SESSION['url']; ?>Static/images/logo.png" />
</head>
<body>
    <div class="tile reset-password-container is-vertical">
        <div>
            <span class="reset-password-header">Reset Password</span>
        </div>
        <br>
        <form name="resetpassform" id="resetpassform" method="post">

            <div class="field tile reset-pass-username-container">
				<label for="" class="label">Username: </label>&nbsp;&nbsp;
				<input class="input is-small reset-pass-input" type="text" name="reset-pass-username" id="reset-pass-username" value="" required autofocus>
			</div>

            <div class="field tile reset-pass-email-container">
                <label for="" class="label">Email: </label>&nbsp;&nbsp;
                <input class="input is-small reset-pass-input" type="text" name="reset-pass-email" id="reset-pass-email" value="" required autofocus>
            </div>

            <br>
            <div class="confirm-notice-container">
                <p class="confirm-notice"></p>
            </div>
            <div class="tile forgot-password-button-container">
                <button class="button is-success reset-password-button" type="submit" name="confirm-button" id="confirm" value=""><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Confirm</button>
            </div>
        </form>
    </div>
</body>
</html>