<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Users</title>

		<link rel="stylesheet" type="text/css" media="screen" href="../../../Static/css/bulma/bulma.css" />
	    <link rel="stylesheet" type="text/css" media="screen" href="../../../Static/css/bulma/bulma-pageloader.min.css" />
	</head>
	<body>
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
	</body>
</html>