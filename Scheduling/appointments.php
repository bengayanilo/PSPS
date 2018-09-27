<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Appointments</title>
	<!-- <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/PSPS/Static/css/bulma/bulma.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="http://localhost/PSPS/Static/css/bulma/bulma-pageloader.min.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="http://localhost/PSPS/Static/css/font-awesome/font-awesome.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="http://localhost/PSPS/Scheduling/css/appointments.css" /> -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Scheduling/css/appointments.css" />
		<!-- <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/Web/Homepage/css/main.css" /> -->
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/appointments.js"></script>
	<div class="tile appointments-container">
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
				$.post("http://localhost/PSPS/Scheduling/events.php",JSON.stringify({status:loader}),function(data){
					var output = "<thead>"+
													"<tr>                <!--Column Names-->"+
														"<td class='column-name'>"+
															"<span>Patient Name</span>"+
														"</td>"+
														"<td class='column-name'>"+
															"<span>Time</span>"+
														"</td>"+
														"<td class='column-name'>"+
															"<span>Status</span>"+
														"</td>"+
														"<td class='column-name'>"+
															"<span>Actions</span>"+
														"</td>"+
													"</tr>               <!--Column Names End-->"+
												"</thead>";
					for(var i in data){
						output +='<tr class="populated-column">                <!--Populated Columns-->'+
												'<td class="appointment-data appointment-patient-name-data">'+
													'<span>'+data[i]['text']+'</span>'+
												'</td>'+
												'<td class="appointment-data appointment-time-data">'+
													'<span>'+data[i]['start']+'-'+data[i]['end']+'</span>'+
												'</td>'+
												'<td class="appointment-data appointment-status-data">'+
													'<span>'+data[i]['tags']['status']+'</span>'+
												'</td>'+
												'<td class="appointment-data appointment-actions-data">'+
													'<div class="tile level">'+
														'<div class="tile button is-gray">'+
															'<span>confirm</span>'+
														'</div>'+
														'<div class="tile button is-gray">'+
															'<span>cancel</span>'+
														'</div>'+
													'</div>'+
												'</td>'+
											'</tr>                                        <!--Populated Columns End-->';
					}
					$('#myTable').html(output);
				});
			}
		});
	</script>
</body>
</html>