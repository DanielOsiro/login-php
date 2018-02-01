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
    <form class="register">
      <h1>Register</h1>

      E-mail: <br>
      <input type="text" name="Login"> <br>
      Password: <br>
      <input type="password" name="password"> <br>
      <input type="submit" value="submit">
    </form>

    <?php require_once "inc/footer.php"; ?>
  </body>

</html>
