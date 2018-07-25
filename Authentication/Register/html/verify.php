<?php
  require('../../../Database/config.php');

  if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){

    $email = mysql_escape_string($_GET['email']); // Set email variable
    $hash = mysql_escape_string($_GET['hash']); // Set hash variable

    $search = mysqli_query("SELECT user_email, hash, active FROM tbl_users WHERE user_email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysqli_error());
    $match  = mysqli_num_rows($search);

      if($match > 0){
            // We have a match, activate the account
            mysql_query("UPDATE tbl_users SET active='1' WHERE user_email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error());
            echo '<script type="text/javascript">
                    alert("Your account has been activated, you can now login");
                  </script>';
        }else{
            // No match -> invalid url or account has already been activated.
            echo '<script type="text/javascript">
                    alert("The url is either invalid or you already have activated your account.");
                  </script>';
        }

    }else{
        // Invalid approach
        echo '<script type="text/javascript">
                alert("Invalid approach, please use the link that has been send to your email.");
              </script>';
    }
?>
