<!DOCTYPE html>
<html>
<head>
<?php
	require_once "functions/functions.php";	
	$title = "Новини спортивного життя ЧПТ";
	require_once "css/head.php";
	$foto = @getFoto (9, $_GET["id"]);
?>
</head>
<body>
	<?php require_once "blocks/header.php"?>
	
	<div id="wrapper">
	<div id="leftCol">
						<?php
							for ($i = 0; $i < count($foto); $i++){
								if($i == 0)
							echo "<div id=\"about_us\">";
								else
							echo "<div id=\"about_us\">";
							echo '
							<table><tr>
							<td style="height:220px;  width:300px" >
							<img alt="'.$foto[$i]["title"].'" title="'.$foto[$i]["title"].'" src="'.$foto[$i]["silka1"].'" />
							</td>
							<td style="text-align:justify; padding: 10px;">
							<a href="fotoarticle.php?id='.$foto[$i]["id"].'">
							<h2 style="color: black; "">'.$foto[$i]["title"].'</h2>
							</a>
							<p>'.$foto[$i]["text"].'</p>
							</td>
							</tr>
							</table>
								</div><br>';
								if($i == 0)
							echo "<div class=\"clear\"><br></div>";
							}

						?>
	</div>
	<?php require_once "blocks/rightCol.php"?>
	</div>
	<?php require_once "blocks/footer.php"?>
	
</body>
</html>