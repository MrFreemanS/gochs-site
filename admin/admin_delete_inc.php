<?php
require_once 'admin_security_check.php';
$title = 'Админка';

$ch = curl_init(API_HOST.'/inc/'.$_GET["id"]);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Authorization: Bearer MY_API_TOKEN')
);

$result = curl_exec($ch);

if ($result != "OK"){
  header("Location: /admin/admin.php");
  exit();
}
else {
  header("Location: /admin/admin.php");
}
?>
