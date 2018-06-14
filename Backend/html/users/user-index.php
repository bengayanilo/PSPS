<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Users</title>

		<link rel="stylesheet" type="text/css" media="screen" href="../../../Static/css/bulma/bulma.css" />
	    <link rel="stylesheet" type="text/css" media="screen" href="../../../Static/css/bulma/bulma-pageloader.min.css" />
	</head>
	<body>
	<div class="columns">
		<div class="column">
			<div class="card box">
				<div class="card-header">
					<nav class="level">
						<div class="level-left">
							<div class="level-item">
								<div class="card-content field has-addons">
									<a href="/" class="button is-primary">
										<span class="icon is-small">
											<i class="fa fa-plus"></i>
										</span>
										<span>Create</span>
									</a>
								</div>	
							</div>
						</div>
					</nav>
				</div>
				<div class="card-content">
					<table class="table is-fullwidth">
						<thead>
							<tr>
								<th>User ID</th>
								<th>Username</th>
								<th>Email</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php include 'user-show.php'; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
		
	</body>
</html>