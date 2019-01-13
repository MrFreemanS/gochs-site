<?php

if (isset($_POST["title"]) && isset($_POST["news"])){
var_dump($_POST);
}
require_once 'admin_security_check.php';
$title = "Добавление новостей";
require_once 'admin_header.php';



?>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>


<form action="admin_add_news.php" name="add_news" method="post">
  <label for="title">Заголовок:</label>
  <input type="text" class="form-control" id="title" value="" >

  <label for="news">Новость:</label>
  <textarea class="form-control" rows="5" id="news"></textarea>
  <button type="submit" class="btn btn-default">Отправить</button>
</form>
