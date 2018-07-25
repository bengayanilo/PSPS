<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Password Reset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
    <script src="<?php echo $_SESSION['url']; ?>Static/js/jquery.min.js"></script>
</head>
<body>
    <div>
	    <span class="login-header">Reset Password</span>
	</div>
    <form name="resetpassform" id="resetpassform" method="post">
        <div class="field tile">
			<label for="" class="label">Email: </label>
			<input class="input is-small" type="text" name="reset-pass-email" id="reset-pass-email" value="" required autofocus>
        </div>
        
        <!-- <div class="field tile ">
			<label for="" class="label is-small reg-label"><span class="reg-text hero">Email: </span></label>
			<input class="input is-small reg-input" type="email" name="email" id="email" value="" required>
        </div> -->
        
        <div class="tile forgot-passord-button-container">
			<button class="button is-success reset-password-button" type="submit" name="reset-password-button" id="reset-password-button" value=""><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Confirm</button>
		</div>
    </form>
</body>
</html>