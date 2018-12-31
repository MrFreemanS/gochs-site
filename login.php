<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
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
			<div class="col-md-9">
			</div>
		</div>
	</div>
	</header>
	<body>

<form class="form-horizontal" action="http://localhost:3012/login" method="post">
  <div class="form-group">
    <label for="login" class="col-sm-2 control-label">Логин</label>
    <div class="col-md-5">
      <input type="inputlogin" class="form-control" id="inputLogin" name="login" placeholder="Введите логин">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Пароль</label>
    <div class="col-md-5">
      <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Введите пароль">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Войти</button>
    </div>
  </div>
</form>
</body>
</html>
