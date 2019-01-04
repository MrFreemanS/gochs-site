<?php
    $ticker = 'срочная новость';
?>

<!DOCTYPE html>
<html lang="uni">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php echo $title;?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
	<nav class="navbar navbar-static">
	 <div class="container"></div>
	</nav><!-- /.navbar -->

	<header class="masthead">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="/"><img src="/img/logo.png" width="270" height="191"  class="img-fluid" alt="logo"></a>

			</div>
			<div class="col-md-5"></div>
			<div class="col-md-4">
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" name="searchString" placeholder="Ключевое слово">
					</div>
					<button type="submit" class="btn btn-default">Искать</button>
				</form>
			</div>
		</div>
	</div>
	</header>
