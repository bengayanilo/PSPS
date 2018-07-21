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
	$showweek = array();
	$weekcount = array();
	while($weeklycount = $weeklyresult->fetch_assoc()){
		$showweek[] = $weeklycount['showweek'];
		$weekcount[] = $weeklycount['weekcount'];
	}

	$monthly = "SELECT MONTHNAME(appointment_start) AS showmonth, COUNT(appointment_start) as monthcount
							FROM appointment
							WHERE appointment_status='confirmed'
							GROUP BY MONTHNAME(appointment_start)";
	$monthlyresult = $db->query($monthly) or die($db->error);
	$showmonth = array();
	$monthcount = array();
	while($monthlycount = $monthlyresult->fetch_assoc()){
		$showmonth[] = $monthlycount['showmonth'];
		$monthcount[] = $monthlycount['monthcount'];
	}

	$yearly = "SELECT YEAR(appointment_start) AS showyear, COUNT(appointment_start) as yearcount
							FROM appointment
							WHERE appointment_status='confirmed'
							GROUP BY YEAR(appointment_start)";
	$yearlyresult = $db->query($yearly) or die($db->error);
	while($yearlycount = $yearlyresult->fetch_assoc()){
		$showyear[] = $yearlycount['showyear'];
		$yearcount[] = $yearlycount['yearcount'];
	}

	$hourly = "SELECT HOUR(TIME_FORMAT(appointment_start, '%h:%i:%s %p')) AS showhour, COUNT(appointment_start) AS hourcount
							FROM appointment
							WHERE appointment_status='waiting' OR appointment_status='confirmed'
							GROUP BY HOUR(TIME_FORMAT(appointment_start, '%r'))";
	$hourlyresult = $db->query($hourly) or die($db->error);
	$showhour = array();
	$hourcount = array();
	while($hourlycount = $hourlyresult->fetch_assoc()){
		$showhour[] = $hourlycount['showhour'];
		$hourcount[] = $hourlycount['hourcount'];
	}

	echo '<div class="tile" style="min-width: 45%; max-width: 96%; margin-right: 1%;">
									<div class="tile is-12 is-vertical">
										<div class="tile">
											<div class="tile graph-link-containers selected-graph">
												<a class="button is-light is-dark graph-links show-weekly" href="javascript:;">Weekly</a>
											</div>
											<div class="tile graph-link-containers">
												<a class="button is-light graph-links show-monthly" href="javascript:;">Monthly</a>
											</div>
											<div class="tile graph-link-containers" style="margin-bottom: 1.5rem;">
												<a class="button is-light graph-links show-yearly" href="javascript:;">Yearly</a>
											</div>
										</div>
										<div class="tile">
											<div class="tile is-vertical box weekly-graph" style="width: 100%;">
												<p class="title">Weekly</p>
												<div class="card-content" style="width:100%;">
													<canvas id="weeklychart"></canvas>

													<script type="text/javascript">

														var weeks = '. json_encode($showweek) .';
														var countweek = '. json_encode($weekcount).';
														console.log(countweek)
														var chart = document.getElementById("weeklychart");

														var weeklyChart = new Chart(chart, {
															type: "line",
															data: {
																		labels: weeks,
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
																						data: countweek,
																				}
																		]
																},
														});

													</script>

												</div>
											</div>
											<div class="tile is-vertical box monthly-graph" style="display: none;">
												<p class="title">Monthly</p>
												<div class="card-content" style="width:100%;">
													<canvas id="monthlychart"></canvas>

													<script type="text/javascript">

														var month = '. json_encode($showmonth) .';
														var countmonth = '. json_encode($monthcount) .';
														console.log(countmonth);
														var chart = document.getElementById("monthlychart");

														var monthlyChart = new Chart(chart, {
															type: "line",
															data: {
																		labels: month,
																		datasets: [
																				{
																						label: "Monthly appointments",
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
																						data: countmonth,
																				}
																		]
																},
														});

													</script>

												</div>
											</div>

											<div class="tile is-vertical box yearly-graph" style="display: none; margin-bottom: 1.5rem;">
												<p class="title">Yearly</p>
												<div class="card-content" style="width:100%;">
													<canvas id="yearlychart"></canvas>

													<script type="text/javascript">

														var year = '. json_encode($showyear) .';
														var countyear = '. json_encode($yearcount) .';
														var chart = document.getElementById("yearlychart");

														var yearlyChart = new Chart(chart, {
															type: "line",
															data: {
																	labels: year,
																	datasets: [
																		{
																			label: "Yearly appointments",
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
																			data: countyear,
																		}
																	]
																},
															});

													</script>

												</div>
											</div>
			
										</div>
										<div class="tile box">
											<div class="tile is-vertical appointments-by-hour-graph" style="padding: 1.25rem;">
												<p class="title">Appointments by the Hour</p>
												<div class="card-content" style="max-width: 400px;">
													<canvas id="doughnutchart"></canvas>

													<script type="text/javascript">

														var hours = '. json_encode($showhour) .';
														var counthour = '. json_encode($hourcount).';
														console.log(hours)
														var chart = document.getElementById("doughnutchart");

														var weeklyChart = new Chart(chart, {
															type: "doughnut",
															data: {
																		labels: hours,
																		datasets: [
																				{
																						label: "No. of Appointment per Hour",
																						fill: false,
																						lineTension: 0.1,
																						backgroundColor: ["#33cc33", "#ff9933", "#6699ff", "#ff3300", "#6699ff", "#ff6699"],
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
																						data: counthour,
																				}
																		]
																},
														});

													</script>

												</div>
											</div>
											<div class="tile is-vertical graph-accdg-to-appointment" style="padding: 1.25rem;">
											<p class="title">Graph Accdg to Appointment</p>

												<div class="card-content" style="width:100%;">
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
