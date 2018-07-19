<?php
	require('../../Database/config.php');
	
	$professionalsdata = mysqli_query($db,"SELECT * FROM tbl_users WHERE user_type='psy'"); // or die("Error: error with with query");
	
?>

<head>

		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Professionals - Psyche Solution Psychological Services</title>
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>/Professionals/css/professionals.css">
		<script src="<?php echo $_SESSION['url']; ?>Professionals/js/professionals.js"></script>

</head>

<body>
	<div class="tile professionals-wrapper is-12" id="professionals-section">
		<div class="tile is-parent is-vertical is-12 rows-container">
			<div class="tile single-row-container"> <!-- 1 Row -->
				<?php while($row = mysqli_fetch_array($professionalsdata))
				{
					if($row['picture'] != NULL)
					{
						echo '<div class="tile is-white is-2.5 is-vertical professionals-card"><a class="professionals-card-link" href="javascript:;" onclick="showdoctor('.$row['user_id'].')"> <!-- Card Template -->
							<div class="tile primary-info">
								<figure class="image is-128x128 profile-pic-fig">
									<span class="profile-pic-span">
										<img class="profile-pic-img" src="'.$_SESSION['url'].$row['picture'].'">
									</span>';
					}
					else
					{
						echo '<div class="tile is-white is-2.5 is-vertical professionals-card"><a class="professionals-card-link" href="javascript:;" onclick="showdoctor('.$row['user_id'].')"> <!-- Card Template -->
							<div class="tile primary-info">
								<figure class="image is-128x128 profile-pic-fig">
									<span class="profile-pic-span">
										<img class="profile-pic-img" src="'.$_SESSION['url'].'Static/images/profile-placeholder.jpg">
									</span>';
					}
					echo '</figure>
						<div class="professionals-name-container">
							<span class="professionals-name">'.$row['firstname'].'&nbsp;'.$row['surname'].'</span>
						</div>
					</div>

					<span class="horizontal-divider"></span>

					<div class="tile is-vertical secondary-info">
						<div class="tile organization-container">
							<div class="image is-128x128 organization-logo-container">
								<img class="organization-logo" src="'.$_SESSION['url'].'Static/images/logo.png">
							</div>
							<div class="organization-name-container">
								<span class="organization-name">Psyche Solution Psychological Services</span>
							</div>
						</div>

						<div class="tile is-vertical position-container">
							<div class="position-name-container">
								<span class="position-name">Psychosomatic Medicine Specialist,</span>
							</div>
							<div class="establishment-container">
								<span class="establishment-name">De La Salle University - Dasmariñas</span>
							</div>
						</div>
					</div>

					<span class="horizontal-divider"></span>

					<div class="tile view-profile-link-container">
						<div class="tile button is-notification is-white view-profile-link">
							<span class="view-profile-text"><i class="fa fa-1x fa-user-circle-o view-profile-logo" aria-hidden="true"></i>&nbsp;&nbsp;View Profile</span>
						</div>
					</div>

				</a></div> <!-- Card Template End -->

				<script>

					function showdoctor(userid){

						var doctorid = userid;
						var modal = new DayPilot.Modal({
								onClosed: function(args) {
								if (args.result) {
									window.location.replace("'.$_SESSION['url'].'Homepage/html/index.php");
								}
							}
						});
						modal.showUrl("'.$_SESSION['url'].'Professionals/html/showprofessional.php?doctor="+doctorid);
					};

				</script>';
				} ?>

			</div> <!-- 1 Row End -->
		</div>
	</div>

</body>