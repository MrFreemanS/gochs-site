<?php
    $title = 'УПРАВЛЕНИЕ ГОЧС ГОРОДА - МКУ "Управление ГОЧС города Белгорода"';
    require_once 'header.php';

    $searchString = $_GET['searchString'];
    $page = $_GET['page'];


    if (strlen($searchString)!=0)
    {
      $posts = file_get_contents('http://localhost:3012/search/'.$searchString);
    }
    else {
      $posts = file_get_contents('http://localhost:3012/page/'.$page);
    }

?>
<!-- Begin Body -->
<div class="container">
	<div class="no-gutter row">
      		<!-- меню -->
				<?php	include_once "menu.php"; ?>
					<!-- новости -->
      		<div class="col-md-9" id="content">
          <div class="panel">
    			<div class="panel-heading" style="background-color:#111;color:#fff;">
          <div class="marquee"> <?PHP echo $ticker; ?></div>
          </div>
					<?php
					if ($posts==NULL)
					{
						echo "Ошибка подключения к API";
						exit();
					}
					$posts = json_decode($posts);
					foreach ($posts as $post):?>
					<!--пошла конкретная новость-->
					<div class="panel-body">
						<!-- Заголовок-->
						<h3><?=$post->{'title'}?></h3>
					  <!-- кототкая новость -->
						<?=mb_substr($post->{'news_txt'},0,500,'UTF-8').'...'?>
					  <br><br>
					  <!-- кончилась -->
					 <a href="/post.php?post_id=<?=$post->{'news_id'}?>"> <button class="btn btn-default">Подробнее</button></a>
					  <br><hr>
					  </div>
						<!--конец конкретной новости -->
						<?PHP endforeach; ?>
            <center><ul class="pagination">
              <li><a href="/">1</a></li>
              <li><a href="/index.php?page=1">2</a></li>
              <li><a href="/index.php?page=2">3</a></li>
              <li><a href="/index.php?page=3">4</a></li>
              <li><a href="/index.php?page=4">5</a></li>
            </ul></center>
					</div>
				</div>
					<!--конец новостей-->
  	</div>
</div>
<?PHP require_once 'footer.php';?>
