<?php
  //Allow the config
  define('__CONFIG__', true);
  //require the config
  require_once "inc/config.php";

  echo $_SESSION['user_id'] . ' is your user id.';
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <style>
      .center{
        text-align: center;
      }
    </style>
  </head>

  <body>
    <div style="margin:auto; width:50%; border: 2px solid black; padding: 70px 0;">
      <?php
        echo "<h1 class='center'>PHP login system</h1>";
        echo "<br>";
        echo "<p class='center'>This is a php-login system</p>";
        echo "<br>";
      ?>

      <p>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
      </p>
    </div>

    <?php require_once "inc/footer.php"; ?>
  </body>

</html>
