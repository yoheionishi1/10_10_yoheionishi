<?php

//0.外部ファイル読み込み
include("function.php");

//1.  DB接続します
$pdo = db_con();
?>


<!-- Head[Start] -->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="boostrap.css">
<link rel="stylesheet" type="text/css" href="example.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>ブックマークアプリ</title>
</head>
<body>
<!-- Head[Start] -->


<header>
<div class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<a href="#" class="navbar-brand"><img src="img/logo.png"></a>
</div>
<div class="navbar-collapse collapse" id="navbar-main">
<ul class="nav navbar-nav">
<li><a href="select.php">書籍一覧</a></li>
<li><a href="insert_view.php">書籍新規登録</a></li>
<li><a href="user_select.php">ユーザー一覧</a></li>
<li><a href="user_insert_view.php">ユーザー登録</a></li>
<li><a href="login.php">ログイン</a></li>
<li><a href="logout.php">ログアウト</a></li>
</ul>
</div>
</div>
</div>
</header>
<!-- Head[End] -->



<!-- Main[Start] -->
<div>
<div class="container jumbotron">
<form method="post" action="user_insert.php">
  <div class="jumbotron">
   <fieldset>
   <legend>ユーザー登録画面</legend>
   <label>代表者名：<input type="text" name="admin_name"></label><br>
   <label>会社名：<input type="text" name="com_name"></label><br>
   <label>ID：<input type="text" name="admin_id"></label><br>
   <label>パスワード：<input type="text" name="admin_pass"></label><br>
   <input type="submit" value="送信">
  s</fieldset>
  </div>
</form>
</div>
</div>
<!-- Main[End] -->

</body>
</html>