	<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Home - Psyche Solution Psychological Services</title>
	<link rel="stylesheet" type="text/css" href="../css/top-bar.css">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="icon" href="../images/logo.png">
	</head>
	<?php	/*								
	include "../php/DBConn.php";
*/?>
	<body>
	<script src="../js/home.js"></script>
	<div id="top-bar">												<!--top bar-->
		<div class="fixed-width">
			
			
			<div id="top-menu">
			<div id = "logodiv">
				<ul class="logoandname">
					<li id="psps-logo">
						<img src="../images/logo.png">
					</li>
					<li id="company-name">
						<img src="../images/company_name_white.png">
					</li>
				</ul>
			</div>
			<div id = "buttonsdiv">
				<ul class = "topnav">
					
					<li>
						<a id = "home" href = "home.php" go = "top-of-page">Home</a>						<!--#STop-->
					</li>
					<li>
						<a id = "news" href = "#" go = "news-section">News</a>								<!--#SNews-->
					</li>
					<li>
						<a id = "services" href = "#" go = "services-section">Services</a>					<!--#SServices-->
					</li>
					<li>
						<a id = "professionals" href = "#" go = "professionals-section">Professionals</a>	<!--#SProfessionals-->
					</li>
					<li>
					<?php
						if(isset($_SESSION['username'])){
							$stat = '
										
											<a id = "dropdown" href="">'.$_SESSION['username'].'</a>
												<div class = "dropdown-content">
												<ul id = "signInList">
													<li>
														<a class = "sign-in" href = "patientprofile.php">Profile</a>
													</li>
													<li>
														<a class = "sign-in" href = "../php/logout.php">Logout</a>
													</li>
												</ul>
												</div>
											
							</li>';
						}
						else{
							$stat = '<div id = "signinDiv"><a class = "sign-in" href="sign-in.php">Sign In</a></div></li>';
						}
						echo $stat;
						?>
					
					
				</ul>
			</div>
			</div>	
	 	</div>	
	</div>
	<!--top bar-->
</div>
</body>
</html>