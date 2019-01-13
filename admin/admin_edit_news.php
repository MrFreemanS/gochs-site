<?php
require_once 'admin_security_check.php';
$post_id = $_GET['id'];
if (!is_numeric($post_id)) //Если в GET будет передан не числовой параметр, ничего не заработает
{
  exit();
}


$posts = file_get_contents('http://localhost:3012/news/'.$post_id);
$posts = json_decode($posts);
$title = $posts[0]->{'news_title'};
require_once 'admin_header.php';

?>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>



<form action="admin_edit_news.php" name="add_news" method="post">
  <label for="title">Заголовок:</label>
  <input type="text" class="form-control" id="title" value="<?PHP echo $posts[0]->{'news_title'} ?>" >

  <label for="news">Новость:</label>
  <textarea class="form-control" rows="5" id="news"><?PHP echo $posts[0]->{'news_txt'} ?></textarea>
  <button type="submit" class="btn btn-default">Отправить</button>
</form>
