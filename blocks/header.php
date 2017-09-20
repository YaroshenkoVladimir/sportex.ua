<header>
		<div id="logo">
			<a href="index.php" title="Перейти на головну"><span>ЧПТ</span>спорт</a>
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
		<div id="regAuth">
			<?php 
			require "users/db.php";
			?>
			<?php if(isset($_SESSION['logged_user'])) : ?>
			Привіт, <?php echo $_SESSION['logged_user']->login; ?>!		|	<a href="users/logout.php">Вийти</a> | <a href="admin/">Панель адміністратора</a>
			<?php else : ?>
			<a href="users/signup.php">Реєстрація</a> | <a href="users/login.php">Авторизація</a>
			<?php endif; ?>
		</div>
</header>