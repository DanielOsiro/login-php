<?php
  //Allow the config
  define('__CONFIG__', true);
  //require the config
  require_once "inc/config.php";
?>

<!DOCTYPE html>
<html lang="pt">

  <form class="js-login">
    <h1>Login</h1>

    E-mail: <br>
    <input type="text" name="Login"> <br>
    Password: <br>
    <input type="password" name="password"> <br>

    <p class="js-error" style="display: none"></p>

    <input type="submit" value="submit">
  </form>

</html>
