<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Backend - Psyche Solution Psychological Services</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />
	<link rel="icon" href="<?php echo $_SESSION['url']; ?>Static/images/logo.png" />
</head>
<body>

	<div class="container is-fluid">

		<div class="columns">

			<div class="column">
				<div id = "content">
					
					<div class="columns">
						<div class="column">
							<div class="card box">
								<div class="card-header">
									<p class="card-header-title">Reports</p>
								</div>
								<nav class="level">
									<div class="level-left">
										<div class="level-item">
											<div class="card-content field has-addons">
												<a href="progress/progress.php" class="button is-primary">
													<span class="icon is-small">
														<i class="fa fa-plus"></i>
													</span>
													<span>Create</span>
												</a>
											</div>	
										</div>
									</div>
									
									<div class="level-right">
										<form action="" method = POST>
											<div class="field has-addons movetoleft">
												<p class="control"> <input type="text" class="input" name="search" placeholder="Find report"> </p>
												<p class="control"> <input type="submit" class="button is-info" name="submit" value="search"> </p>
											</div>
										</form>
									</div>
								</nav>
								<div class="card-content">
									<table class="table is-fullwidth">
										<thead>
											<tr>
												
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

</body>
</html>