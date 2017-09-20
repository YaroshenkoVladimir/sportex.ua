<!DOCTYPE html>
<html>
<head>
<?php
	require_once "functions/functions.php";	
	$title = "Новини спортивного життя ЧПТ";
	require_once "css/head.php";
	$galery = @getGalery (9, $_GET["id"]);
?>
</head>
<body>
	<?php require_once "blocks/header.php"?>
	
	<div id="wrapper">
		<div id="leftCol">
		

		
		
		<?php
			for ($i = 0; $i < count($galery); $i++){
				if($i == 0)
					echo "<div id=\"about_us\">";
				else
					echo "<div id=\"about_us\">";
				echo '<a href="galeryarticle.php?id='.$galery[$i]["id"].'">
				<h2>'.$galery[$i]["title"].'</h2>
				</a>
				<p>'.$galery[$i]["text"].'</p>
				
			</div><br>';
			if($i == 0)
				echo "<div class=\"clear\"><br></div>";
			}
			
			
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