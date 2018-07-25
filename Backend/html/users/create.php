<?php
	require('../../../Database/config.php');
	include('../backend-base.php');
?>

<div class="column">
	<div class="columns">
		<div class="column">
			<a href="/backend/users" class="button">
				<span class="icon is-small">
    				<i class="fa fa-long-arrow-left"></i>
				</span>
				<span>Back</span>
			</a>
		</div>
	</div>
	<div class="columns">
		<div class="column">
			<div class="card box">
				<div class="card-header">
					<p class="card-header-title">Create user</p>
				</div>
				<div class="card-content">
					<form action="_usercreate.php" method="post">
						<div class="field">
							<label> Username </label>
							<div class="control">
								<input type="text" class="input" name="new_username" autofocus>
							</div>
						</div>
						<div class="field">
							<label> First Name </label>
							<div class="control">
								<input type="text" class="input" name="firstname" autofocus>
							</div>
						</div>
						<div class="field">
							<label> Last Name </label>
							<div class="control">
								<input type="text" class="input" name="lastname" autofocus>
							</div>
						</div>
						<div class="field">
							<label> Email </label>
							<div class="control">
								<input type="text" class="input" name="new_email" >
							</div>
						</div>
						<div class="field">
							<label> Password </label>
							<div class="control">
								<input type="password" class="input" name="new_pass">
							</div>
						</div>
						<div class="field">
							<label> Confirm Password </label>
							<div class="control">
								<input type="password" class="input" name="new_passcon">
							</div>
						</div>
						<hr>
						<input type="submit" class="button is-primary" name="submitcreate" value="Submit">
					</form>
				</div>
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
