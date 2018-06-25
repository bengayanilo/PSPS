<?php
	include('../backend-base.php');
?>
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
								<th>Review ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php include 'show.php'; ?>
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
