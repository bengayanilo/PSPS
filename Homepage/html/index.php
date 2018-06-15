<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Psyche Solution Psychological Services</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../../Static/css/bulma/bulma.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../Static/css/bulma/bulma-pageloader.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../Static/css/font-awesome/font-awesome.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <link rel="icon" href="../../Static/images/logo.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.2/less.min.js" ></script> -->
    <script src="../js/main.js"></script>
</head>
<body>
  <?php include("../../Navbar/html/_navbar.php"); ?>
                  <section class="greetings" id="home-section">

                  </section>
	                  <?php include("../../News/html/news.php"); ?>
                  <section>
                      <?php include("../../Services/html/services.php"); ?>
                  </section>
                  <section id="professionals-section">
                      Professionals Section
                  </section>
                  <?php include("../../Footer/html/footer-distributed-with-address-and-phones.html"); ?>
    <div class="pageloader"><span class="title">Pageloader</span></div>
</body>
</html>