<html>
<head>
<meta  charset="utf-8">
<title>Реєстрація</title>
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
		<div id="regAuth">
			<?php if(isset($_SESSION['logged_user'])) : ?>
			Авторизований!
			<?php else : ?>
			<a align="left" href="login.php">Авторизація</a>
			<?php endif; ?>
		</div>
</header>
	
	<div id="wrapper">
		<div id="leftCol">

	<div id="regAuth">

			<?php 
		require "db.php";
		
		$data = $_POST;
		if ( isset($data['do_signup']))
		{
			// тут  реєструємо
			$errors = array();
			if(trim($data['login']) == '' )
			{
				$errors[] = 'Введіть логін!';
			}
			if(trim($data['email']) == '' )
			{
				$errors[] = 'Введіть Email!';
			}
			if($data['password'] == '' )
			{
				$errors[] = 'Введіть пароль!';
			}
			if($data['password_2'] != $data['password'] )
			{
				$errors[] = 'Пароль введений не вірно!';
			}
			if( R::count('users', "login = ?", array($data['login'])) > 0)
			{
				$errors[] = 'Користувач з таким логіном вже існує!';
			}
			if( R::count('users', "email = ?", array($data['email'])) > 0)
			{
				$errors[] = 'Користувач з таким Email вже існує!';
			}
			if( empty($errors))
			{
				//все добре, реєструємось!
				$user = R::dispense('users');
				$user->login = $data['login'];
				$user->email = $data['email'];
				$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
				R::store($user);
				echo'<div id="about_us"><div style="color: green;">Ви успішно зареєстровані</div><hr></div><br>';
			}else
			{
				echo'<div id="about_us"><div style="color: red;">'.array_shift($errors).'</div><hr></div><br>';
			}
		}
		?> 
		<form action="signup.php" method="POST">
		<p>
			<input type="text" name="login" placeholder="Ваш логін" value="<?php echo @$data['login']; ?>">
		</p>
		<p>
			<input type="email" name="email" placeholder="Ваш email" value="<?php echo @$data['email']; ?>">
		</p>
		<p>
			<input type="password" name="password" placeholder="Ваш пароль" value="<?php echo @$data['password']; ?>">
		</p>
		<p>
			<input type="password" name="password_2" placeholder="Введіть ваш пароль ще раз" value="<?php echo @$data['password_2']; ?>">
		</p> 
		<p>
			<input type="submit" name="do_signup"  value="Зарєструватись">	

		</p>
		</form>


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




		