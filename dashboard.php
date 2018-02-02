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
    <title>
      <?php
        echo 'User ' . $_SESSION['user_id'];
      ?>
    </title>
  </head>

  <body>
    <div style="margin:auto; width:50%; border: 2px solid black; padding: 70px 0;">
      <p style="text-align: center;">Your are now loged in.</p>
    </div>

    <?php require_once "inc/footer.php"; ?>
  </body>

</html>
