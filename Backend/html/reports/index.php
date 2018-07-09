<?php
	include('../backend-base.php');
?>
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
								<p class="control"> <input type="text" class="input" name="search" placeholder="Find specific news"> </p>
								<p class="control"> <input type="submit" class="button is-info" name="submit" value="search"> </p>
							</div>
						</form>
					</div>
				</nav>
				<div class="card-content">
					<table class="table is-fullwidth">
						<thead>
							<tr>
								<th>Appointment ID</th>
								<th>Doctor Name</th>
								<th>Patient Name</th>
								<th>Patient Session</th>
								<th>Start</th>
								<th>End</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<!-- Insert php include _reports.php  -->
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
