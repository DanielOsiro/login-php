<?php
  //Allow the config
  define('__CONFIG__', true);
  //require the config
  require_once "inc/config.php";

  forceDashboard();
?>

<!DOCTYPE html>
<html lang="pt">

  <head>
    <meta charset="utf-8" />
  </head>

  <body>

    <form class="js-register">
      <h1>Register</h1>

      E-mail: <br>
      <input type="email" required="required"> <br>
      Password: <br>
      <input type="password" required="required"> <br>

      <p class="js-error" style="display: none"></p>

      <input type="submit" value="Register">
    </form>

    <hr><br><br>
    <a href="index.php">Back</a>
    
    <?php require_once "inc/footer.php"; ?>

  </body>

</html>
