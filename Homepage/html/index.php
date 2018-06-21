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
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Homepage/css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Navbar/css/navbar.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Homepage/css/hero.css" />
    <link rel="icon" href="<?php echo $_SESSION['url']; ?>Static/images/logo.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.2/less.min.js" ></script> -->
    <script src="../js/main.js"></script>
    <script src="../../Navbar/js/navbar.js"></script>
</head>
<body>
<!-- <main class="wrapper"> -->
  <div class="navbar-wrapper">
    <?php include("../../Navbar/html/_navbar.php"); ?>
  </div>
  <main class="wrapper">
    <section class="section parallax bg1" id="home-section">
    <div class="greetings hero-top">
      <h1 style="font-family: Trebuchet; text-shadow: 2px 2px #000000;">One small positive thought in the morning can change your whole day.</hi>
    </div>
    </section>
    <!-- <section> -->
    </section>
	  <?php include("../../News/html/news.php"); ?>
                      <!-- </section> -->
                  <section>
                      <?php include("../../Services/html/services.php"); ?>
                  </section>
                  <section id="professionals-section">
                      Professionals Section
                  </section>
                  <?php include("../../Footer/html/footer-distributed-with-address-and-phones.html"); ?>
    <div class="pageloader"><span class="title">Pageloader</span></div>
    </main>
</body>
</html>