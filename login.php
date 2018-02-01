<?php
  //Allow the config
  define('__CONFIG__', true);
  //require the config
  require_once "config.php";
?>

<!DOCTYPE html>
<html lang="pt">

  <form>
    <h1>Login</h1>

    E-mail: <br>
    <input type="text" name="Login"> <br>
    Password: <br>
    <input type="password" name="password"> <br>
    <input type="submit" value="submit">
  </form>

</html>
