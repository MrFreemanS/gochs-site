<?php

  session_start();
  //var_dump($_SESSION['login']);
  if (isset($_SESSION['login']))
  {
    header("Location: /admin/admin.php");
    exit();
  }
require_once 'header.php';
    $title = 'Админка';

?>

<form class="form-horizontal" action="autorize.php" method="post">
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
