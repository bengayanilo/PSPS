<?php
	require('../../../Database/config.php');
	
	$shownews = $_GET['show_id'];
	$selectnews = "SELECT news_id, title, author, news_date, body FROM news WHERE news_id=$shownews";

	$newsdata = $db->query($selectnews);
	$data = $newsdata->fetch_assoc();

	include('../backend-base.php');
?>
			<div class="column">
				<div class="columns">
					<div class="column">
						<a href="index.php" class="button">
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
								<p class="card-header-title">News Details</p>
							</div>
							<div class="card-content">
								<table class="table is-fullwidth">
									<thead>
										<tr>
											<th width="100">News ID</th>
											<th width="100">News Title</th>
											<th width="100">Author</th>
											<th width="100">Date Posted</th>
											<th width="100">Body</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php echo $data['news_id']; ?></td>
											<td><?php echo $data['title']; ?></td>
											<td><?php echo $data['author']; ?></td>
											<td><?php echo $data['news_date']; ?></td>
											<td><?php echo $data['body']; ?></td>
										</tr>
									</tbody>
								</table>
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