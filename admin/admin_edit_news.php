<?php
require_once 'admin_security_check.php';

$post_id = $_GET['id'];
if (!is_numeric($post_id)) //Если в GET будет передан не числовой параметр, ничего не заработает
{
  exit();
}

if (isset($_POST["title"]) && isset($_POST["news"]))
{
  $data = array('title' => $_POST["title"],'news' => $_POST["news"],'id' => $post_id);
  $string = http_build_query($data);

  $myCurl = curl_init();
  curl_setopt_array($myCurl, array(
  CURLOPT_URL => 'http://localhost:3012/news/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $string
  ));

  $response = curl_exec($myCurl);
  curl_close($myCurl);
}

$posts = file_get_contents('http://localhost:3012/news/'.$post_id);
$posts = json_decode($posts);
//var_dump($posts);
$title = $posts[0]->{'news_title'};

require_once 'admin_header.php';

?>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>



<form action="admin_edit_news.php?id=<?php echo $_GET['id'];?>" name="add_news" method="post">
  <label for="title">Заголовок:</label>
  <input type="text" class="form-control" name="title" id="title" value="<?PHP echo $posts[0]->{'news_title'}?>" >

  <label for="news">Новость:</label>
  <textarea class="form-control" rows="5" name="news" id="news"><?PHP echo $posts[0]->{'news_txt'}?></textarea>
  <button type="submit" class="btn btn-default">Отправить</button>
</form>
