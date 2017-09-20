<html>
<head>
<meta  charset="utf-8">
<title>Адмін - панель</title>
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
		<div id="logo">
			<a href="../index.php" title="Перейти на головну"><span>ЧПТ</span>спорт</a>
		</div>
		<div id="menuHead">
			<a href="../feedback.php">
			<div style="margin-right: 1%">Зворотній зв'язок</div>
			</a>
			<a href="../stzdorovy.php">
			<div style="margin-right: 1%">Сторінка здоров'я</div>
			</a>
			<a href="../about.php">
			<div style="margin-right: 1%">Про нас</div>
			</a>
		</div>
		<?php 
			require "db.php";
			?>
</header>
	
	<div id="wrapper">
		<div id="leftCol">
		<div id="about_us">
	<div id="regAuth">
	<center><a href="add.php" title="Додати новину"><span style="border:2px solid silver; border-radius: 5px; background-color: #c8c8c8; padding: 5px; color: black;"><b>Додати новину</b></span></a></center><br>
	<center><a href="addvideo.php" title="Додати відео"><span style="border:2px solid silver; border-radius: 5px; background-color: #c8c8c8; padding: 5px; color: black;"><b>Додати відео</b></span></a></center><br>
	<center><a href="addfoto.php" title="Додати фото"><span style="border:2px solid silver; border-radius: 5px; background-color: #c8c8c8; padding: 5px; color: black;"><b>Додати фото</b></span></a></center>
		</div>
	</div>
</div>
<div id="rightCol">
	<div class="nav">
    <ul>
    	<li><a href="../news.php">Новини</a></li>
		<li><a href="../foto.php">Фото галерея</a></li>
		<li><a href="../galery.php">Відео галерея</a></li>
        <li><a href="../section.php">Секції</a></li>
        <li><a href="../ticher.php">Викладачі</a></li>
        <li><a href="../sportsmens.php">Спортсмени</a></li>
		<li><a href="../gordchpt.php">Гордість ЧПТ</a></li>     
    </ul>
	</div>

			<div class="banner">
				<img src="../img/banner_2.jpg" alt="Баннер 1" title="Баннер 1">
			</div>
			<div class="banner">
				<img src="../img/banner_1.jpg" alt="Баннер 2" title="Баннер 2">
			</div>
</div>
	</div>
	<footer>
		<div id="social">
			<a href="http://vk.com" title="Група ВК" target="_blank">
			<img src="../img/vk.png" alt="ВК" title="ВК">
			</a>
			<a href="http://facebook.com" title="Група Facebook" target="_blank">
			<img src="../img/facebook.png" alt="Facebook" title="Facebook">
			</a>
			<a href="http://twitter.com" title="Група twitter" target="_blank">
			<img src="../img/twitter.png" alt="Twitter" title="Twitter">
			</a>
		</div>
		<div id="rights">
			Всі права захищені &copy; <?=date ('Y')?>
		</div>
</footer>
	
</body>
</html>