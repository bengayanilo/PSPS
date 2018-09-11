<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Appointments</title>
	<link rel="stylesheet" type="text/css" media="screen" href="../Static/css/bulma/bulma.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../Static/css/bulma/bulma-pageloader.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../Static/css/font-awesome/font-awesome.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/appointments.css" />
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/Web/Homepage/css/main.css" /> -->
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/appointments.js"></script>
  <div class="tile appointments-container">
	<div class="appointments">

	  <div>
		<span class="appointments-header">Appointments</span>
	  </div>
	  
      <hr>

      <div class="tile level appointments-sort-buttons">
        <a id="sort-awaiting" class="appointments-sort" href="javascript:;">
          <div class="tile button is-dark is-selected">
            <span>Awaiting Confirmation</span>
          </div>
        </a>
        <a id="sort-confirmed" class="appointments-sort" href="javascript:;">
          <div class="tile button is-gray">
            <span>Confirmed</span>
          </div>
        </a>
        <a id="sort-all" class="appointments-sort" href="javascript:;">
          <div class="tile button is-gray">
            <span>All Appointments</span>
          </div>
        </a>
      </div>

      <table class="table is-striped is-hoverable">
      <thead>
        <tr>                <!--Column Names-->
          <td class="column-name">
            <span>Patient Name</span>
          </td>
          <td class="column-name">
            <span>Time</span>
          </td>
          <td class="column-name">
            <span>Status</span>
          </td>
          <td class="column-name">
            <span>Actions</span>
          </td>
        </tr>               <!--Column Names End-->
        </thead>

        <tr class="populated-column">                <!--Populated Columns-->
          <td class="appointment-data appointment-patient-name-data">
            <span>sample name</span>
          </td>
          <td class="appointment-data appointment-time-data">
            <span>sample time</span>
          </td>
          <td class="appointment-data appointment-status-data">
            <span>sample status</span>
          </td>
          <td class="appointment-data appointment-actions-data">
            <div class="tile level">
              <div class="tile button is-gray">
                <span>sample action</span>
              </div>
            </div>
          </td>
        </tr>                                        <!--Populated Columns End-->

        <tr class="populated-column">                <!--Populated Columns-->
          <td class="appointment-data appointment-patient-name-data">
            <span>sample name</span>
          </td>
          <td class="appointment-data appointment-time-data">
            <span>sample time</span>
          </td>
          <td class="appointment-data appointment-status-data">
            <span>sample status</span>
          </td>
          <td class="appointment-data appointment-actions-data">
            <div class="tile level">
              <div class="tile button is-gray">
                <span>sample action</span>
              </div>
            </div>
          </td>
        </tr>                                        <!--Populated Columns End-->

        <tr class="populated-column">                <!--Populated Columns-->
          <td class="appointment-data appointment-patient-name-data">
            <span>sample name</span>
          </td>
          <td class="appointment-data appointment-time-data">
            <span>sample time</span>
          </td>
          <td class="appointment-data appointment-status-data">
            <span>sample status</span>
          </td>
          <td class="appointment-data appointment-actions-data">
            <div class="tile level">
              <div class="tile button is-gray">
                <span>sample action</span>
              </div>
            </div>
          </td>
        </tr>                                        <!--Populated Columns End-->
        
      </table>

	</div>
  </div>
</body>
</html>