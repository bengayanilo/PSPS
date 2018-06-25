<?php
    session_start();
    if(isset($_SESSION['id'])){
        if($_SESSION['type']=='psy'){
            header("Location:doctor.php");
        }
        else if($_SESSION['type']=='admin'){
            header("Location:manager.php");
        }
    }
    else{
        header("Location:../Authentication/Login/index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>HTML5 Doctor Appointment Scheduling (JavaScript/PHP)</title>
        <link rel="stylesheet" type="text/css" media="screen" href="../Static/css/bulma/bulma.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="../Static/css/bulma/bulma-pageloader.min.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="../Static/css/font-awesome/font-awesome.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/scheduling.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/Web/Homepage/css/main.css" />
        <!-- <link rel="stylesheet" type="text/css" media="screen" href="../Homepage/css/main.css" /> -->
        <link type="text/css" rel="stylesheet" href="css/layout.css" />

        <!-- DayPilot library -->
        <script src="js/daypilot/daypilot-all.min.js"></script>
    </head>
    <body>
        <div class="main">
            <div>
                <?php require_once '../Navbar/html/_navbar.php'; ?>
            </div>
            <div class="content-wrapper">
                <div style="float:left; width:160px">
                    <div id="nav"></div>
                </div>
                <div style="margin-left: 160px">
                    <div class="space">Available time slots:</div>
                    <div id="calendar"></div>
                </div>

            </div>
        </div>

        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/daypilot/daypilot-all.min.js"></script>

        <script>
            var nav = new DayPilot.Navigator("nav");
            nav.selectMode = "week";
            nav.showMonths = 3;
            nav.skipMonths = 3;
            nav.onTimeRangeSelected = function(args) {
                 loadEvents(args.start.firstDayOfWeek(), args.start.addDays(7));
            };
            nav.init();

            var calendar = new DayPilot.Calendar("calendar");
            calendar.viewType = "Week";
            calendar.timeRangeSelectedHandling = "Disabled";
            calendar.eventMoveHandling = "Disabled";
            calendar.eventResizeHandling = "Disabled";
            calendar.onBeforeEventRender = function(args) {
                if (!args.data.tags) {
                    return;
                }
                switch (args.data.tags.status) {
                    case "free":
                        args.data.barColor = "green";
                        args.data.html = "Available<br/>" + args.data.tags.doctor;
                        args.data.toolTip = "Click to request this time slot";
                        break;
                    case "waiting":
                        args.data.barColor = "orange";
                        args.data.html = "Your appointment, waiting for confirmation";
                        break;
                    case "confirmed":
                        args.data.barColor = "#f41616";  // red
                        args.data.html = "Your appointment, confirmed";
                        break;
                }
            };
            calendar.onEventClick = function(args) {
                if (args.e.tag("status") !== "free") {
                    calendar.message("You can only request a new appointment in a free slot.");
                    return;
                }

                var modal = new DayPilot.Modal({
                    onClosed: function(args) {
                        if (args.result) {  // args.result is empty when modal is closed without submitting
                            loadEvents();
                        }
                    }
                });

                modal.showUrl("appointment_request.php?id=" + args.e.id());
            };
            calendar.init();

            loadEvents();

            function loadEvents(day) {
                var start = nav.visibleStart() > new DayPilot.Date() ? nav.visibleStart() : new DayPilot.Date();

                var params = {
                    start: start.toString(),
                    end: nav.visibleEnd().toString()
                };

                $.post("backend_events_free.php", JSON.stringify(params), function(data) {
                    if (day) {
                        calendar.startDate = day;
                    }
                    calendar.events.list = data;
                    calendar.update();

                    nav.events.list = data;
                    nav.update();

                });
            }
        </script>

    </body>
</html>
