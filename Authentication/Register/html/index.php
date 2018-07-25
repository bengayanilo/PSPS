<?php
	// session_start();
	// if(isset($_SESSION['id'])){
	// 	header("Location:../../index.php");
	// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>

	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />

	<script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo $_SESSION['url']; ?>Scheduling/js/daypilot/daypilot-all.min.js" type="text/javascript"></script>

</head>
<body>
<script src="<?php echo $_SESSION['url']; ?>Authentication/Register/script.js"></script>
<div class="container is-fluid">

	<!-- <div class="box center"> -->
		<div>
			<span class="register-header">Register</span>
		</div>
		<br>

		<form id="form" action="" method="post">
			<div class="tile is-vertical">
				<div class="tile">
					<div class="tile is-vertical reg-left">
						<div class="field tile reg-input-container">
							<label for="" class="label is-small reg-label"><span class="reg-text hero">Username: </span></label>
							<input class="input is-small reg-input" type="text" name="reg_user" id="reg_user" value="" required>
						</div>

						<div class="field tile reg-input-container">
							<label for="" class="label is-small reg-label"><span class="reg-text hero">First Name: </span></label>
							<input class="input is-small reg-input" type="text" name="fname" value="" required>
						</div>

						<div class="field tile reg-input-container">
							<label for="" class="label is-small reg-label"><span class="reg-text hero">Last Name: </span></label>
							<input class="input is-small reg-input" type="text" name="lname"  value="" required>
						</div>

						<div class="field tile reg-input-container">
							<label for="" class="label is-small reg-label"><span class="reg-text hero">Email: </span></label>
							<input class="input is-small reg-input" type="email" name="email" id="email" value="" required>
						</div>

					</div>

					<span class="reg-divider"></span>

					<div class="tile is-vertical reg-right">

						<div class="field tile reg-input-container">
							<label for="" class="label is-small reg-label"><span class="reg-text hero">Password: </span></label>
							<input class="input is-small reg-input" type="password" name="reg_pass" id="reg_pass" value="" required>
						</div>

						<div class="field tile reg-input-container">
							<label for="" class="label is-small reg-label"><span class="reg-text hero">Confirm Password: </span></label>
							<input type="password" class="input is-small reg-input" name="confirmpass" id="confirmpass" value="" required>
						</div>

						<div class="field tile reg-input-container">
							<label for="" class="label is-small reg-label"><span class="reg-text hero">Contact No: </span></label>
							<input class="input is-small reg-input" type="number" name="contact_no" id="contact_no" value="" required>
						</div>

						<div class="field tile reg-input-container">
							<label for="" class="label is-small reg-label"><span class="reg-text hero">Select user type </span></label>
							<div class="control reg-select">
								<div class="select is-info is-small">
									<select name="type">
										<option value="pat">Patient</option>
										<option value="int">Intern</option>
										<option value="rev">Review Applicant</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tile">
					<div class="tile"><p class="control is-small with-account">Already have an account? Sign in <a class="go-to-login" onClick="showLogin()" href="javascript:;">here </a></p></div>
				</div>

				<script>
					function showLogin()
					{
						// $(".login-modal-background").fadeIn().delay(200);
						$(".register-modal").fadeOut();
						$(".register-modal-container").fadeOut();
						$(".login-modal-container").delay(400).fadeIn(400);
						$(".login-modal").delay(420).fadeIn(400);
						document.getElementById("username").focus();
					}
				</script>

				<div class="tile">
					<!-- <div class="tile">
						<button class="button is-dark go-to-login reg-back" type="submit" name="submit"><i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp;Back to Login</button>
					</div> -->
					<div style="margin: auto;">
						<div class="tile">
							<div class="tile reg-button-container">
								<button class="button is-dark reg-clear" type="reset" name="clear"><i class="fa fa-close" aria-hidden="true"></i>&nbsp;Clear</button>
							</div>
							<div class="tile reg-button-container">
								<button class="button is-success reg-submit" type="submit" name="submit" id="register"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Confirm</button>
							</div>
						</div>
					</div>
				</div>

			</div>
		</form>

	<!-- </div> -->

</div>

</body>
</html>
