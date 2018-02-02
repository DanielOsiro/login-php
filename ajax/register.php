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

    //Make sure the user CAN be added and IS added

    //Return the proper information back to javascript to redirect us

    $return['redirect'] = '/index.php?this-was-a-redirect';

    echo json_encode ($return, JSON_PRETTY_PRINT); exit;
  } else{
    //Kill the script. Redirect user.
    exit('test');
  }

?>
