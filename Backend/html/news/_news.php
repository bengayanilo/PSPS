<?php
	require('../../../Database/config.php');

	$getnews = "SELECT news_id, title, author, news_date FROM news";
	$result = $db->query($getnews);

	if ($result->num_rows > 0) {
	// output data of each row
		while($row = $result->fetch_assoc()) {
			echo '<tr>
					<td> '. $row['news_id'] .' </td>
					<td> '. $row['title'] .' </td>
					<td> '. $row['author'] .' </td>
					<td> '. $row['news_date'] .' </td>
					<td>
						<div class="dropdown is-hoverable">
							<div class="dropdown-trigger">
								<button class="button">
									<span>Actions</span>
									<span class="icon">
										<i class="fa fa-angle-down"></i>
									</span>
								</button>
							</div>
							<div class="dropdown-menu">
								<div class="dropdown-content">
									<a class="dropdown-item" href="show.php?show_id='. $row['news_id'] .'">View</a>
									<a class="dropdown-item" href="update.php?update_id='. $row['news_id'] .'">Edit</a>
									<a class="dropdown-item" href="delete.php?delete_id='. $row['news_id'] .'" onclick="return confirm('."'Are you sure?'".');">Delete</a>
								</div>
							</div>
						</div>										
					</td>
				</tr>';
	}
	} else {
		echo "0 results";
	}

	$db->close();
?>