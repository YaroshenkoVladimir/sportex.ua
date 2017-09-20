<!DOCTYPE html>
<html>
<head>
<?php
	require_once "functions/functions.php";	
	$news = getNews (1, $_GET["id"]);
	$title = $news["title"];
	require_once "css/head.php";
	
?>
</head>
<body>
	<?php require_once "blocks/header.php"?>
	
	<div id="wrapper">
		<div id="leftCol">

		<?php
					echo '<div id="bigArticle">
					<img src="'.$news["Img"].'" alt="Стаття '.
					$news["id"].'" title="Стаття '.$news["id"].'">
				<h2>'.$news["title"].'</h2>
				<p>'.$news["full_text"].'</p>
			</div>';
		?>

		</div>

		<?php require_once "blocks/rightCol.php"?>
	</div>
	<?php require_once "blocks/footer.php"?>
	
</body>
</html>