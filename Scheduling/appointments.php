<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Appointments</title>
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Scheduling/css/appointments.css" />
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/appointments.js"></script>
	<div class="tile appointments-container" style="display:none;">
	<div class="appointments">

		<div>
		<span class="appointments-header">Appointments</span>
		</div>
		
			<hr>

			<div class="tile level appointments-sort-buttons">
				<a id="sort-awaiting" class="appointments-sort" href="javascript:;">
					<div id="pending" class="tile button is-dark is-selected">
						<span>Awaiting Confirmation</span>
					</div>
				</a>
				<a id="sort-confirmed" class="appointments-sort" href="javascript:;">
					<div id="confirmed" class="tile button is-gray">
						<span>Confirmed</span>
					</div>
				</a>
				<a id="sort-all" class="appointments-sort" href="javascript:;">
					<div id="all" class="tile button is-gray">
						<span>All Appointments</span>
					</div>
				</a>
			</div>

			<table id="myTable" class="table is-striped is-hoverable">        
			</table>

	</div>
	</div>
	<script type="text/javascript">

		function updatestatus(id,indicator){
			var status = {
				confirm:'confirmed',
				cancel:'free',
			}
			var appointment = {};
				appointment.id = id;
				appointment.status = status['indicator'];
			$.post("<?php echo $_SESSION['url']; ?>Scheduling/updatestatus.php",JSON.stringify(appointment),function(data){
				load("confirmed");
			});
		}

		$(document).ready(function(){
			load("waiting");
			$('#all').click(function(){
					load("all");
			});
			$('#pending').click(function(){
					load("waiting");
			});
			$('#confirmed').click(function(){
					load("confirmed");
			});

			function load(loader){
				$.post("<?php echo $_SESSION['url']; ?>Scheduling/events.php",JSON.stringify({status:loader}),function(data){
					$('#myTable').html(data);
				});
			}
		});
	</script>
</body>
</html>