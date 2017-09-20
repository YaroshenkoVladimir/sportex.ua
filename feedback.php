<!DOCTYPE html>
<html>
<head>
	<?php
		$title = "Новини спортивного життя ЧПТ";
		require_once "blocks/head.php";
	?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script>
		$(document).ready (function() {
			$("#done").click (function () {
				$('#massageShow').hide ();
				var name = $("#name").val ();
				var email = $("#email").val ();
				var subject = $("#subject").val ();
				var massage = $("#massage").val ();
				var fail = "";
				if (name.length < 3) fail = "Імя не меньше 3 символів";
				else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0)
						fail = "Ви ввели некоректний email";
				else if (subject.length < 5)
						fail = "Тема повідомлення не меньше 5 символів";
				else if (massage.length < 20)
						fail = "Повідомлення не меньше 20 символів";
				if (fail != ""){
						$('#massageShow').html (fail + "<div class='clear'><br></div>");
						$('#massageShow').show ();
						return false;
				}
				$.ajax ({
					url: 'ajax/feedback.php',
					type: 'POST',
					cache: false,
					data: {'name': name, 'email': email, 'subject': subject, 'massage': massage},
					dataType: 'html',
					success: function (data) {
							$('#massageShow').html (data + "<div class='clear'><br></div>");
							$('#massageShow').show ();
					}
				});
			});
		});
	</script>
</head>
<body>
	<?php require_once "blocks/header.php"?>
	
	<div id="wrapper">
		<div id="leftCol">
			<input type="text" placeholder="Імя" id="name" name="name"><br />
			<input type="text" placeholder="Email" id="email" name="email"><br />
			<input type="text" placeholder="Тема повідомлення" id="subject" name="subject"><br />
			<textarea name="massage" id="massage" placeholder="Введіть сюди ваше повідомлення."></textarea><br />
			<input type="button" name="done" id="done" value="Відправити">			
			<div id="massageShow"></div>
		</div>
		<?php require_once "blocks/rightCol.php"?>
	</div>
	<?php require_once "blocks/footer.php"?>
	
</body>
</html>