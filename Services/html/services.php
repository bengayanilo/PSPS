<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <title>Services - Psyche Solution Psychological Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Services/css/services.css" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="<?php echo $_SESSION['url']; ?>Services/js/services.js"></script>
</head>
<body>
  <div class="tile services-wrapper is-12" id="services-section">
    <div class="columns-wrapper">

      <span class="divider"></span>

      <div class="tile services-tile-container not-applications">
        <div class="services-tile">
          <div class="tile is-parent is-vertical is-white notification services-link" id="chat">
            <a class="services-circle-link" href="<?php echo $_SESSION['url']; ?>Chat/selection/index.php">
              <div class="tile is-vertical services-info">
                <div class="services-logo">
                  <i class="fa fa-5x fa-comments services-icon" aria-hidden="true"></i>
                </div>
                <div class="services-title">
                  <p class="services-title-p">Support Chat</p>
                </div>
                <div class="services-desc">
                  <p class="services-desc-p">Talk to online psychologists for Psychological Evaluation and Assessment</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>

      <span class="divider"></span>

      <!-- <div class="width-retainer"><span style="font-color: rgba(0, 0, 0, 0);">width-retainer</span></div> -->
      <div class="tile services-tile-container not-applications"><div class="services-tile">
        <div class="tile is-parent is-vertical is-white notification services-link" id="scheduling"><a class="services-circle-link" href="../../Scheduling/index.php">
          <div class="tile is-vertical services-info">
            <div class="services-logo">
              <i class="fa fa-5x fa-calendar services-icon" aria-hidden="true"></i>
            </div>
            <div class="services-title">
              <p class="services-title-p">Schedule Appointment</p>
            </div>
            <div class="services-desc">
              <p class="services-desc-p">Request available time and date for appointments</p>
            </div>
          </div>
        </a></div>
      </div></div>

      <span class="divider"></span>

      <div id="applications-hover" class="tile services-tile-container applications-hover"><div class="services-tile">
        <div class="tile is-parent is-vertical is-white notification services-link" id="applications"><a class="services-circle-link" href="javascript:;">
          <div class="tile is-vertical services-info">
            <div class="services-logo">
              <i class="fa fa-5x fa-upload services-icon" aria-hidden="true"></i>
            </div>
            <div class="services-title">
              <p class="services-title-p">Applications</p>
            </div>
            <div class="services-desc">
              <p class="services-desc-p">Submit forms for different applications</p>
            </div>
          </div>
        </a></div>
      </div></div>

      <div id="services-applications-pyramid" style="margin-top:4%; margin-bottom:4%; height: 9vh" class="tile is-vertical services-applications-pyramid">
      <div class="tile top-row"> <!-- Top Row -->
      <div class="tile services-tile-container applications-branch">
        <div class="services-tile">
        <div class="tile is-parent is-vertical is-white notification services-applications-link" id="review">
          <a target="_blank" class="services-circle-link" href="https://goo.gl/forms/wPwy28kXVT0J6BSW2">
          <div class="tile is-vertical services-applications-info">
            <div class="services-applications-logo">
              <i class="fa fa-2x fa-book services-icon" aria-hidden="true"></i>
            </div>
            <div class="services-title">
              <p class="services-applications-title-p">Review Program</p>
            </div>
            <!-- <div class="services-desc">
              <p class="services-desc-p">Submit application for Preparatory Review Program</p>
            </div> -->
          </div>
        </a>
      </div>
      </div>
    </div>
      </div> <!-- Top Row End -->

      <div class="tile bottom-row"> <!-- Bottom Row -->
      <div class="tile services-tile-container applications-branch"><div class="services-tile">
        <div class="tile is-parent is-vertical is-white notification services-applications-link" id="internship">
          <a target="_blank" class="services-circle-link" href="https://goo.gl/forms/8ZyKCAwmW5oDsNTB3">
          <div class="tile is-vertical services-applications-info">
            <div class="services-applications-logo">
              <i class="fa fa-2x fa-user-md services-icon" aria-hidden="true"></i>
            </div>
            <div class="services-title">
              <p class="services-applications-title-p">Internship</p>
            </div>
            <!-- <div class="services-desc">
              <p class="services-desc-p">Submit application for Internship</p>
            </div> -->
          </div>
        </a></div>
      </div></div>

      <div class="tile services-tile-container applications-branch"><div class="services-tile">
        <div class="tile is-parent is-vertical is-white notification services-applications-link" id="ngo"><a target="_blank" class="services-circle-link" href="https://goo.gl/forms/QycNT0opKi2fRFo93">
          <div class="tile is-vertical services-applications-info">
            <div class="services-applications-logo">
              <i class="fa fa-2x fa-group services-icon" aria-hidden="true"></i>
            </div>
            <div class="services-title">
              <p class="services-applications-title-p">Kalinga sa Pag-asa</p>
            </div>
            <!-- <div class="services-desc">
              <p class="services-desc-p">Submit forms for different applications</p>
            </div> -->
          </div>
        </a></div>
      </div></div>
      </div> <!-- Bottom Row End -->

      </div>

      <span class="divider"></span>
    </div>
  <div>
</body>
</html>