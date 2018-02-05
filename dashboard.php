<?php
  //Allow the config
  define('__CONFIG__', true);
  //require the config
  require_once "inc/config.php";

  forceLogin();

  $user_id = $_SESSION['user_id'];

  $getUserInfo = $con->prepare("SELECT email, reg_time FROM users WHERE user_id= :user_id LIMIT 1");
  $getUserInfo->bindParam('user_id', $user_id, PDO::PARAM_INT);
  $getUserInfo->execute();

  if($getUserInfo->rowCount() == 1){
    //User was found
    $User = $getUserInfo->fetch(PDO::FETCH_ASSOC);
  } else{
    //User is not signed in
    header("Location: /logout.php"); exit;
  }
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8" />
    <title>
      <?php
        echo 'Dashboard - ' . 'User ' . $user_id;
      ?>
    </title>
  </head>

  <body>
    <div style="margin:auto; width:50%; border: 2px solid black; padding: 70px 0;">
      <p style="text-align: center;">Your are now loged in.</p>
      <p style="text-align: center;">Your user id is: <?php echo $user_id ?></p>
      <p style="text-align: center;">Your email: <?php echo $User['email']; ?></p>
      <p style="text-align: center;">You registered at: <?php echo $User['reg_time']; ?></p>
    </div>

    <div style="margin:auto; width:50%; border: 2px solid black; padding: 70px 0;">
      <form class="js-send-message">
        <h2>Send Message</h2>

        <textarea rows="4" cols="50" type="message" form="js-send-message">
        </textarea>

        <input type="submit" value="Send">
      </form>

      <a href="logout.php" align="right">Logout</a>
    </div>

    <?php require_once "inc/footer.php"; ?>
  </body>

</html>
