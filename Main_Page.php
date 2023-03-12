<?php
  $page_id = 150;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli("localhost", "root", "", "db");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Main_Page.css">
</head>
<body>
<div class="hero">
<nav>
	<img src="images/menu_img.png" class="menu_img">
	<img src="images/logo.png" class="logo">
	<ul>
		<li><a href="Main_Page.html">Main Page</a> </li>
		<li><a href="Python.html">Python</a> </li>
		<li><a href="Html.html">Html, Js, Css</a>
		<li><a href="Django.html">Django</a>
		<li><a href="AspNet.html">Asp.Net</a> </li>
		<li><a href="Sql.html">Sql, Php myAdmin</a> </li>
		<li><a href="UnrealEngine.html">Unreal Engine</a></li>
	</ul>
</nav>

	<div class="Portfolio_photo">
		<img src="images/img23.jpg" class="Portfolio">
	 </div>

	 <div class="text">
	 	<h1>Hi!</h1>
	 	<h2>Welcome to my Blog Web Site</h2>
	 	<h3>This is the in which you can see my projects. Now it's not many col, but it's just now. Also I will record videos to show you how I did this projects. Maybe it will be some tutorial later too.</h3>
	 </div>
</div>

<form name="comment" action="comment.php" method="post">
  <p>
    <label>Ваше имя:</label>
    <input type="text" name="name" />
  </p>
  <p>
    <label>Ваш комментарий:</label>
    <br />
    <textarea name="text_comment" cols="30" rows="50"></textarea>
  </p>
  <p>
    <input type="hidden" name="page_id" value="150" />
    <input type="submit" value="Отправить комментарий" />
  </p>
</form>


</body>
</html>