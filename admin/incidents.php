<?php
require_once 'admin_security_check.php';
$title = 'Админка';

$page = (isset($_GET['page'])) ? $_GET['page'] : 1; //если первая стр
if($page<1){
  $page=1;
}
$startPoint = $page - 1;
$posts = file_get_contents(API_HOST.'/inc/'.$page);
require_once 'admin_header.php';
?>



  <div class="container">
    <h2>Список новостей</h2>
    <div class="row">
    <div class="col-md-3">
      <input class="form-control" id="myInput" type="text" placeholder="Поиск в отображённом">
    </div>
    <div class="col-md-7"></div>
    <div class="col-md-2"><a href="admin_add_inc.php"><button class="btn btn-success">Добавить</button></a></div>

  </div>
    <br>
    <?php
    if ($posts==NULL)
    {
      echo "Ошибка подключения к API";
      exit();
    }
    ?>
    <ul class="list-group" id="myList">

      <?php
      $posts = json_decode($posts);
      //цикл новостей
      foreach ($posts as $post):
      ?>


      <div class="container">
        <div class="row">
            <div class="col-md-7"><li class="list-group-item"><?=$post->{'inc_title'}?></li></div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <a href="admin_edit_inc.php?id=<?=$post->{'inc_id'}?>"><button class="btn btn-info">Редактировать</button></a>
            <a href="admin_delete_inc.php?id=<?=$post->{'inc_id'}?>"><button class="btn btn-danger">Удалить</button></a>
          </div>
        </div>
        <hr>
      </div>

	<?PHP endforeach; ?>

      </div>
    </ul>
  </div>
  <center>
    <ul class="pager">
      <li><a href="admin.php?page=<?php echo $page - 1?>">Предыдущая</a></li>
      <li><a href="admin.php?page=<?php echo $page + 1?>">Следующая</a></li>
    </ul>
  </center>

  <script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myList li").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>

</body>
</html>
