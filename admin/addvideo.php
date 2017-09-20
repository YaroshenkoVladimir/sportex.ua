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
			<a href="feedback.php">
			<div style="margin-right: 1%">Зворотній зв'язок</div>
			</a>
			<a href="stzdorovy.php">
			<div style="margin-right: 1%">Сторінка здоров'я</div>
			</a>
			<a href="about.php">
			<div style="margin-right: 1%">Про нас</div>
			</a>
		</div>
		
</header>
	
	<div id="wrapper">
		<div id="leftCol">

	<div id="regAuth">
		
		<form method="POST" action="addvideo.php">
		<p>
		<input type="text" name="title" placeholder="Назва відео" >
		</p>
		<p>
		<textarea cols="40" rows="10" name="text" placeholder="Текст відео" ></textarea>
		</p>
		<p>
		<input type="text" name="silka" placeholder="Посилання на Зображення" >
		</p>
		<p>
			<input type="text" name="category" placeholder="Категорія" >
		</p> 
		<p>
			<input type="text" name="id" placeholder="ID" >
		</p> 
		<p>
			<input type="submit" name="addvideo"  value="Додати відео">	
		</form>
		
		
			<?php 
			require_once "db.php";
			
			if(isset ($_POST['addvideo']))
			{
				
			$title = strip_tags(trim($_POST['title']));
			$text = strip_tags(trim($_POST['text']));
			$silka = strip_tags(trim($_POST['silka'])); 	
			$category = strip_tags(trim($_POST['category'])); 	
			$id = strip_tags(trim($_POST['id'])); 
			
				mysql_query(" INSERT INTO galery(title, text, silka, category, id) VALUES ('$title', '$text', '$silka', '$category', '$id')");
				mysql_close();
				
			
				echo "<p>Відео успішно додана!</p> <hr>";
				
			}
			?>
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