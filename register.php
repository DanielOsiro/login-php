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

    <form class="js-register">
      <h1>Register</h1>

      E-mail: <br>
      <input type="email" required="required"> <br>
      Password: <br>
      <input type="password" required="required"> <br>

      <p class="js-error" style="display: none"></p>

      <input type="submit" value="Register">
    </form>

    <?php require_once "inc/footer.php"; ?>

  </body>

</html>
