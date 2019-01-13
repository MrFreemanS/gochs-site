<?php require_once 'admin_security_check.php';
$title = 'Админка';
//require_once 'admin_header.php';



$data = array('id' => $_GET["id"]);
$string = http_build_query($data);
$myCurl = curl_init();
curl_setopt_array($myCurl, array(
CURLOPT_URL => 'http://localhost:3012/news/',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_CUSTOMREQUEST => "DELETE",
CURLOPT_POSTFIELDS => $string
));

$response = curl_exec($myCurl);
curl_close($myCurl);
if ($response != "OK"){
  header("Location: /admin/admin.php");
  exit();
}
?>
