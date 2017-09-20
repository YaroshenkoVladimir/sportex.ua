<!DOCTYPE html>
<html>
<head>
<?php
	require_once "functions/functions.php";	
	$title = "Новини спортивного життя ЧПТ";
	require_once "css/head.php";
	$news = @getNews (9, $_GET["category"]);
?>
</head>
<body>
	<?php require_once "blocks/header.php"?>
	
	<div id="wrapper">
		<div id="leftCol">
		
		<?php
			for ($i = 0; $i < count($news); $i++){
				if($i == 0)
					echo "<div id=\"bigArticle\">";
				else
					echo "<div class=\"article\">";
				echo '<img src="'.$news[$i]["Img"].'" alt="Стаття '.$news[$i]["id"].'" title="Стаття '.$news[$i]["id"].'">
				<a href="article.php?id='.$news[$i]["id"].'">
				<h2>'.$news[$i]["title"].'</h2>
				</a>
				<p>'.$news[$i]["intro_text"].'</p>
				
			</div>';
			if($i == 0)
				echo "<div class=\"clear\"><br></div>";
			}
		?>
		</div>

		<?php require_once "blocks/katnews.php"?>
	</div>
	<?php require_once "blocks/footer.php"?>
	
</body>
</html>