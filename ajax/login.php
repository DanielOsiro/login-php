<?php
  //Allow the config
  define('__CONFIG__', true);
  //Require the config
  require_once "../inc/config.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Always return JSON format
    //header('Content-Type: application/json');

    $return = [];

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_found = findUser($con, $email);

    if(!$user_found){
      //User exists, try to sign in
      $user_id = (int) $user_found['user_id'];
      $hash = (string) $user_found['password'];

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
