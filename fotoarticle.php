<!DOCTYPE html>
<html>
<head>
<?php
	require_once "functions/functions.php";	
	$foto = getFoto(1, $_GET["id"]);
	$title = $foto["title"];
	require_once "css/head.php";
	
?>
</head>
<body>
	<?php require_once "blocks/header.php"?>
	
	<div id="wrapper">
		<div id="leftCol">

		<?php
				echo '<div id="bigArticle">
				<img width="560" height="315" src="'.$foto["silka1"].'" />
				<img width="560" height="315" src="'.$foto["silka2"].'" />
				<img width="560" height="315" src="'.$foto["silka3"].'" />
				<center><h2>'.$foto["title"].'</h2>
				<d>'.$foto["text"].'</d></center>
				<div>
				<a href="'.$foto["silkafile"].'">Переглянути більше фото</a>
				</div>
			</div>';
		?>

		</div>

	<div id="rightCol">
	<div class="nav">
    <ul>
    	<li><a href="news.php">Новини</a></li>
		<li><a href="foto.php">Фото галерея</a></li>
		<li><a href="galery.php">Відео галерея</a></li>
        <li><a href="section.php">Секції</a></li>
        <li><a href="ticher.php">Викладачі</a></li>
        <li><a href="sportsmens.php">Спортсмени</a></li>
		<li><a href="gordchpt.php">Гордість ЧПТ</a></li>
    </ul>
	</div>

			<div class="banner">
				<img src="img/banner_2.jpg" alt="Баннер 1" title="Баннер 1">
			</div>
			<div class="banner">
				<img src="img/banner_1.jpg" alt="Баннер 2" title="Баннер 2">
			</div>
</div>
	</div>
	<?php require_once "blocks/footer.php"?>
	
</body>
</html>