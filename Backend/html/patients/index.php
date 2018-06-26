<?php
	include('../backend-base.php');
?>
	<div class="columns">
		<div class="column">
			<div class="card box">
				<div class="card-header">
					<p class="card-header-title">Patients</p>
				</div>
				<nav class="level">
					<div class="level-left">
						<div class="level-item">
							<div class="card-content field has-addons">
								<a href="create.php" class="button is-primary">
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
								<p class="control"> <input type="text" class="input" name="search" placeholder="Find a user"> </p>
								<p class="control"> <input type="submit" class="button is-info" name="submit" value="search"> </p>
							</div>
						</form>
					</div>
				</nav>
				<div class="card-content">
					<table class="table is-fullwidth">
						<thead>
							<tr>
								<th>Patient ID</th>
								<th>Patient Name</th>
								<th>Email</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php include '_patient.php'; ?>
						</tbody>
					</table>
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
