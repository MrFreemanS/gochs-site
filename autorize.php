<?php
require_once 'config.php';
if (!(isset($_POST["login"])) && !(isset($_POST["password"])))
{
	header("Location: /login.php");
  exit();
}
else {
	$data = array('login' => $_POST["login"],'password' => md5($_POST["password"]));
	$string = http_build_query($data);

	$myCurl = curl_init();
	curl_setopt_array($myCurl, array(
	CURLOPT_URL => API_HOST.'/login/',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_POST => true,
	CURLOPT_POSTFIELDS => $string
	));

	$response = curl_exec($myCurl);
	curl_close($myCurl);

//var_dump($response);

	if ($response != "OK"){
      header("Location: /login.php");
      exit();
		}
		else {
			session_start();
			$_SESSION['login'] = $_POST["login"];
			//var_dump($_SESSION['login']);
			header("Location: /admin/admin.php");
		}
}

?>
