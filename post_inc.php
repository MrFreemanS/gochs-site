<?php
	$post_id = $_GET['post_id'];
	if (!is_numeric($post_id)) //Если в GET будет передан не числовой параметр, ничего не заработает
	{
		exit();
	}

  $posts = file_get_contents('http://localhost:3012/inc/'.$post_id);
  $posts = json_decode($posts);
	$title = $posts[0]->{'inc_title'};

	require_once 'header.php';
?>

<!-- Begin Body -->
<div class="container">
	<div class="no-gutter row">
      		<!-- меню -->
				<?php	include_once "menu.php"; ?>

					<!-- новости-->
      		<div class="col-md-9" id="content">
            	<div class="panel">
    			<div class="panel-heading" style="background-color:#111;color:#fff;"><?PHP echo $ticker; ?></div>
					<!--пошла конкретная новость-->
					<div class="panel-body">
            <h2><?PHP echo $posts[0]->{'inc_title'}?></h2>
            <?PHP echo $posts[0]->{'inc_txt'} ?>
            <br><hr>
          </div>
						<!--конец конкретной новости-->
					</div>
				</div>
					<!--конец новостей-->

  	</div>
</div>
<?php require_once 'footer.php'; ?>
