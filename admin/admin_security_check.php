<?php
require_once '../config.php';
session_start();
//var_dump($_SESSION['login']);
if (!(isset($_SESSION['login'])))
{
  header("Location: /login.php");
  exit();
}
else {
  $data = array('login' => $_SESSION["login"]);
  $string = http_build_query($data);

  $myCurl = curl_init();
  curl_setopt_array($myCurl, array(
  CURLOPT_URL => API_HOST.'/isadmin/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => $string
  ));

  $response = curl_exec($myCurl);
  curl_close($myCurl);

//  var_dump($_SESSION['login']);
//var_dump($response);

  if ($response != "OK"){
      header("Location: /");
      exit();
  	}
}

?>
