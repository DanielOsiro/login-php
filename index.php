<?php
  //Allow the config
  define('__CONFIG__', true);
  //require the config
  require_once "inc/config.php";
?>

<!DOCTYPE html>
<html lang="pt">

  <?php
    echo "<h1>Hello world!</h1>";
    echo "<p>This is a php-login system</p>"
  ?>

  <p>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
  </p>

</html>
