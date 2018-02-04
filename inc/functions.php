<?php
//Force the user to be logged in or redirect to login page
function forceLogin {
  if(isset($_SESSION['user_id'])){
    //The user is allowed here
  } else {
    //The user is not allowed here
    header("Location: /login.php"); exit;
  }
}

?>
