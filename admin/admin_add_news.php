<?php
require_once 'admin_security_check.php';
if (isset($_POST["title"]) && isset($_POST["news"]))
{

  $data = array('title' => $_POST["title"],'news' => $_POST["news"]);
  $string = http_build_query($data);

  $myCurl = curl_init();
  curl_setopt_array($myCurl, array(
  CURLOPT_URL => 'http://localhost:3012/news/',
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


<form action="admin_add_news.php" name="add_news" method="post">
  <label for="title">Заголовок:</label>
  <input type="text" class="form-control" name="title" id="title" value="" >

  <label for="news">Новость:</label>
  <textarea class="form-control" rows="5" name="news" id="news"></textarea>
  <button type="submit" class="btn btn-default">Отправить</button>
</form>
