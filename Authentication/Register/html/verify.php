<?php
  require('../../../Database/config.php');

  if(isset($_GET['email']) && !empty($_GET['email']) && isset($_GET['hash']) && !empty($_GET['hash'])){

    $email = mysqli_real_escape_string($db,$_GET['email']); // Set email variable
    $hash = mysqli_real_escape_string($db,$_GET['hash']); // Set hash variable

    $search = mysqli_query($db,"SELECT user_email, hash, active FROM tbl_users WHERE user_email='".$email."' AND hash='".$hash."' AND active=0") or die('error');
    $match  = mysqli_num_rows($search);

      if($match > 0){
            // We have a match, activate the account
            mysqli_query($db,"UPDATE tbl_users SET active=1 WHERE user_email='".$email."' AND hash='".$hash."' AND active=0") or die(mysql_error());
            echo '<script type="text/javascript">
                    alert("Your account has been activated, you can now login");
                    window.location.replace("../../../index.php");
                  </script>';
        }else{
            // No match -> invalid url or account has already been activated.
            echo '<script type="text/javascript">
                    alert("The url is either invalid or you already have activated your account.");
                    window.location.replace("../../../index.php"); 
                  </script>';
        }

    }else{
        // Invalid approach
        echo '<script type="text/javascript">
                alert("Invalid approach, please use the link that has been send to your email.");
              </script>';
    }
?>
