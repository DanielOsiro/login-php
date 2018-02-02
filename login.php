<?php
  //Allow the config
  define('__CONFIG__', true);
  //require the config
  require_once "inc/config.php";
?>

<!DOCTYPE html>
<html lang="pt">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Page Title</title>

    <base href="/" />
  </head>

  <body>
    <form class="js-login">
      <h1>Login</h1>

      E-mail: <br>
      <input type="text" name="Login"> <br>
      Password: <br>
      <input type="password" name="password"> <br>

      <p class="js-error" style="display: none"></p>

      <input type="submit" value="submit">
    </form>

    <?php require_once "inc/footer.php"; ?>
  </body>

</html>
