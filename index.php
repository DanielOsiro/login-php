<?php
  //Allow the config
  define('__CONFIG__', true);
  //require the config
  require_once "inc/config.php";
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
  </head>

  <body>
    <?php
      echo "<h1>PHP login system</h1>";
      echo "<p>This is a php-login system</p>"
    ?>

    <p>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
    </p>

    <?php require_once "inc/footer.php"; ?>
  </body>

</html>
