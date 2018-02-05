<?php
//Allow the config
define('__CONFIG__', true);
//Require the config
require_once "../inc/config.php";


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  //Always return JSON format
  //header('Content-Type: application/json');

  $return = [];

  $to = "danielosiro@hotmail.com";
  $subject = "Test Subject";
  $msg = $_POST['message'];
  $headers = "From: Daniel@projects.com";

  mail($to, $subject, $msg, $headers);

  $return['redirect'] = '/dashboard.php';

  echo json_encode ($return, JSON_PRETTY_PRINT); exit;
} else{
  //Kill the script. Redirect user.
  exit('Invalid URL');
}









?>
