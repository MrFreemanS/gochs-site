<?php
session_start();

if (isset($_POST["login"]) && isset($_POST["password"]))
{

	$data = array('login' => $_POST["login"],'password' => md5($_POST["password"]));
	$string = http_build_query($data);

	$myCurl = curl_init();
	curl_setopt_array($myCurl, array(
	CURLOPT_URL => 'http://localhost:3012/login/',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_POST => true,
	CURLOPT_POSTFIELDS => $string
	));

	$response = curl_exec($myCurl);
	curl_close($myCurl);
	if ($response != "OK"){
      header("Location: /");
      exit();
		}
}
else {
  header("Location: /");
  exit();
}

$title = 'Админка';
require_once 'header.php';


?>


<div id="sample">
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
<br />
  <h4>
    Second Textarea
  </h4>
  <textarea name="area2" style="width: 100%;">
       Some Initial Content was in this textarea
</textarea><br />
  
</div>
