<?php
  //Allow the config
  define('__CONFIG__', true);
  //Require the config
  require_once "../inc/config.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Always return JSON format
    header('Content-Type: application/json');

    $return = [];

    //Make sure the user does not exist
    $findUser = $con->prepare("SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1");
    $findUser->bindParam(':email', $email, PDO::PARAM_STR);
    $findUser->execute();

    if($findUser->rowCount() == 1){
      //User exists
      //Check if the user can log in
      $return['error'] = "You already have an account";
    } else{
      //User does not exist, add them now
      $addUser = $con->prepare("INSERT INTO users(email, password) VALUES (:email, :password)");
      $addUser->bindParam(':email', $email, PDO::PARAM_STR);
      $addUser->bindParam(':password', $password, PDO::PARAM_STR);
      $addUser->execute();
    }
    //Make sure the user CAN be added and IS added

    //Return the proper information back to javascript to redirect us

    $return['redirect'] = '/index.php?this-was-a-redirect';

    echo json_encode ($return, JSON_PRETTY_PRINT); exit;
  } else{
    //Kill the script. Redirect user.
    exit('test');
  }

?>
