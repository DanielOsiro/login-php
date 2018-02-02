<?php
  //Allow the config
  define('__CONFIG__', true);
  //Require the config
  require_once "../inc/config.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Always return JSON format
    header('Content-Type: application/json');

    $return = [];

    $email = $_POST['email'];
    $password = $_POST['password'];

    //Make sure the user does not exist
    $findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
    $findUser->bindParam(':email', $email, PDO::PARAM_STR);
    $findUser->execute();

    if($findUser->rowCount() == 1){
      //User exists
      //Check if the user can log in
      $User = $findUser->fetch(PDO::FETCH_ASSOC);

      $user_id = (int) $User['user_id'];
      $hash = (string) $User['password'];

      if(password_verify($password, $hash)){
        //User is signed in
        $return['redirect'] = '/dashboard.php';

        $_SESSION['user_id'] = $user_id;
      } else{
        //Invalid email/password
        $return['error'] = "Invalid user email or password";
      }

    } else{
      //User does not exist, offer to register
      $return['error'] = "You do not have an account. <a href='/register.php'>Create one now?</a>";
    }

    echo json_encode ($return, JSON_PRETTY_PRINT); exit;
  } else{
    //Kill the script. Redirect user.
    exit('Invalid URL');
  }

?>
