<?php
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$subject = htmlspecialchars($_POST['subject']);
	$massage = htmlspecialchars($_POST['massage']);
	if ($name == '' || $email == '' || $subject == '' || $massage == '') {
		echo 'Заповніть всі поля';
		exit;
	}
	// Відправка
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
	if(mail("m1nd1k95@gmail.com", $subject, $massage, $headers))
		echo "Повідомлення відправлено";
	else
		echo "Повідомлення не відправлено";
?>