<?php
require_once 'admin_security_check.php';
if (isset($_POST["title"]) && isset($_POST["inc"]))
{

  $data = array('title' => $_POST["title"],'inc' => $_POST["inc"]);
  $string = http_build_query($data);

  $myCurl = curl_init();
  curl_setopt_array($myCurl, array(
  CURLOPT_URL => API_HOST.'/inc/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS => $string
  ));

  $response = curl_exec($myCurl);
  curl_close($myCurl);

}
$title = "Добавление новостей";
require_once 'admin_header.php';



?>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>


<form action="admin_add_inc.php" name="add_inc" method="post">
  <label for="title">Заголовок:</label>
  <input type="text" class="form-control" name="title" id="title" value="" >

  <label for="inc">Новость:</label>
  <textarea class="form-control" rows="5" name="inc" id="inc"></textarea>
  <button type="submit" class="btn btn-default">Отправить</button>
</form>
