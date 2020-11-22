<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

	<div class="content">
		<?php
		include "menu.php";
		?>

		<h1>Личный сайт студента GeekBrains</h1>

		<div class="center">
			<img src="img/avatar.png">
			<div class="box_text">
				<p><b>Добрый день</b>. Меня зовут <i>Андрей Паскал</i>. Я два года прогал на С++. Сейчас окончательно определился, что интереснее всего для меня, писать мобильные приложения. Этот подготовительный курс по JS/Html/PHP не очень подходит для курса мобильной разработки. Надеюсь, когда-нибудь пригодится. Прохожу его для галочки, т.к. он есть в программе.</p>

				<p>IT-портал: <a href="https://geekbrains.ru">GeekBrains</a></p>

				<p>На моем сайте вы сможете сыграть в несколько игр, которые я написал: 
					<a href="puzzle.php">Загадки,</a>
					<a href="guess.php">Угадайка для двоих</a>.
				</p>
				<p>А также сгенерировать надежный пароль: <a href="passgen.php">Генератор паролей</a></p>	
			</div>
		</div>
	</div>
	<?php
	include "footer.php";
	?>


</body>
</html>