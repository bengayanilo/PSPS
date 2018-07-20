<?php
	require('../../Database/config.php');
	include('backend-base.php');

	$free = "SELECT COUNT(appointment_status) AS free
						FROM appointment
						WHERE appointment_status='free'";
	$freeresult = $db->query($free);
	$freedata = $freeresult->fetch_assoc();

	$confirmed = "SELECT COUNT(appointment_status) AS confirmed
									FROM appointment
									WHERE appointment_status='confirmed'";
	$confirmresult = $db->query($confirmed);
	$confirmdata = $confirmresult->fetch_assoc();

	$waiting = "SELECT COUNT(appointment_status) AS waiting
								FROM appointment
								WHERE appointment_status='waiting'";
	$waitingresult = $db->query($waiting);
	$waitingdata = $waitingresult->fetch_assoc();

	$weekly = "SELECT WEEK(appointment_start, 5) AS showweek, COUNT(appointment_start) as weekcount
							FROM appointment
							WHERE appointment_status='confirmed'
							GROUP BY WEEK(appointment_start)";
	$weeklyresult = $db->query($weekly) or die($db->error);
	$weeklycount = mysqli_fetch_array($weeklyresult, MYSQLI_ASSOC);

	$monthly = "SELECT MONTH(appointment_start) AS showmonth, COUNT(appointment_start) as monthcount
							FROM appointment
							WHERE appointment_status='confirmed'
							GROUP BY MONTH(appointment_start)";
	$monthlyresult = $db->query($monthly) or die($db->error);
	$monthlycount = mysqli_fetch_array($monthlyresult, MYSQLI_ASSOC);

	$yearly = "SELECT YEAR(appointment_start) AS showyear, COUNT(appointment_start) as yearcount
							FROM appointment
							WHERE appointment_status='confirmed'
							GROUP BY YEAR(appointment_start)";
	$yearlyresult = $db->query($yearly) or die($db->error);
	$yearlycount = mysqli_fetch_array($yearlyresult, MYSQLI_ASSOC);

	echo '<div class="columns">
	  			<div class="column">
	    			<div class="card box">

							<div class="tile is-ancestor">
								<div class="tile is-6">
									<div class="tile is-vertical is-parent">

										<div class="tile is-child box">
											<p class="title">Pie Chart</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
										</div>

										<div class="tile is-child box">
											<p class="title">Weekly</p>
											<div class="card-content" style="width:300px;">
												<canvas id="weeklychart"></canvas>

												<script type="text/javascript">

													var week = '. $weeklycount['showweek'] .';
													var countweek = '. $weeklycount['weekcount'].'
								          var chart = document.getElementById("weeklychart");

								          var weeklyChart = new Chart(chart, {
								            type: "line",
								            data: {
															    labels: ["Week " + week],
															    datasets: [
															        {
															            label: "Weekly appointments",
															            fill: false,
															            lineTension: 0.1,
															            backgroundColor: "rgba(75,192,192,0.4)",
															            borderColor: "rgba(75,192,192,1)",
															            borderCapStyle: "butt",
															            borderDash: [],
															            borderDashOffset: 0.0,
															            borderJoinStyle: "miter",
															            pointBorderColor: "rgba(75,192,192,1)",
															            pointBackgroundColor: "#fff",
															            pointBorderWidth: 1,
															            pointHoverRadius: 5,
															            pointHoverBackgroundColor: "rgba(75,192,192,1)",
															            pointHoverBorderColor: "rgba(220,220,220,1)",
															            pointHoverBorderWidth: 2,
															            pointRadius: 5,
															            pointHitRadius: 10,
															            data: [countweek],
															        }
															    ]
															},
								          });

								        </script>

											</div>
										</div>

									</div>

									<div class="tile is-vertical is-parent">
										<div class="tile is-child box">
											<p class="title">Monthly</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
										</div>

										<div class="tile is-child box">
											<p class="title">Yearly</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
										</div>

									</div>
								</div>

						  <div class="tile is-parent">
						    <div class="tile is-child box">
						      <p class="title">Graph Accdg to Appointment</p>

									<div class="card-content style="width:300px; height:300px;">
						        <canvas id="barchart"></canvas>

						        <script type="text/javascript">

						          var free = '. $freedata['free'] .';
											var confirm = '. $confirmdata['confirmed'] .';
											var waiting = '. $waitingdata['waiting'] .';

						          var chart = document.getElementById("barchart");
						          console.log(chart);

						          var barChart = new Chart(chart, {
						            type: "bar",
						            data: {
						                  labels: ["Free","Waiting","Confirmed"],
						                  datasets: [{
						                      label: "Appointments",
						                      data: [free, waiting, confirm],
						                      backgroundColor: [
						                          "rgba(0, 128, 0, 0.5)",
						                          "rgba(255, 206, 86, 0.2)",
																			"rgba(255, 99, 132, 0.5)",
						                      ],
						                      borderColor: [
						                          "rgba(0, 128, 0, 1)",
						                          "rgba(255, 206, 86, 1)",
																			"rgba(255,99,132,1)",
						                      ],
						                      borderWidth: 1
						                  }],
						              },
						              options: {
						                  scales: {
						                      yAxes: [{
						                          ticks: {
						                              beginAtZero:true
						                          }
						                      }]
						                  }
						              }
						          });

						        </script>
						      </div>

						    </div>
						  </div>
						</div>

	    </div>
	  </div>
	</div>';
?>
	<!-- <div class="columns">
		<div class="column">
			<div class="card box">
				<div class="card-content">
					<b>Upload review materials</b>
					<form id="form" method=POST enctype=multipart/form-data action="">
					<div class="level">
						<div class="file">
							<label class="file-label">
								<input class="file-input" type="file" name="fileToUpload" id="fileToUpload">
								<span class="file-cta">
									<span class="file-label">
										Choose a file…
									</span>
								</span>
							</label>
						</div>
						<input type="submit" class="button is-primary" name="submit" value="upload">
					</div>
					</form>
				</div>
				<div class="card-header">
					<p class="card-header-title">Session report</p>
				</div>
				<div class="card-content">
					<canvas id="barchart" width="400px" height="400px"></canvas>
					<script src="../js/main.js"></script>
				</div>
			</div>
		</div>
	</div> -->
<!-- end part of backend base -->
				</div>
			</div>

		</div>
	</div>

</body>
</html>

<!-- For the upload -->
<?php
	if(isset($_POST['submit'])){
		$target_dir = "../../Static/files/review_materials/";
		$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }

	    // Check if file already exists
		// if (file_exists($target_file)) {
		//     echo "Sorry, file already exists.";
		//     $uploadOk = 0;
		// }
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "<script type='text/javascript'>alert('Sorry, there was an error.'); </script>";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    	echo "<script>alert('File uploaded');</script>";
		    } else {
		        echo "<script type='text/javascript'>alert('Sorry, there was an error updating your profile.');</script>";
		    }
		}
	}
?>
