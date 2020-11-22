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

		<div class="contentWrap">
			<div class="content">
				<div class="center">

					<h1>Игра в загадки</h1>

					<div class="box">
						<?php
						if (isset($_GET["userAnswer1"]) && isset($_GET["userAnswer2"]) && isset($_GET["userAnswer3"])) {
							$userAnswer = mb_strtolower($_GET["userAnswer1"]);
							$score = 0;
							if ($userAnswer=="оля"){
								$score++;
							}
							$userAnswer = mb_strtolower($_GET["userAnswer2"]);
							if ($userAnswer=="сон" || $userAnswer=="крышка" || $userAnswer=="ее крышка" || $userAnswer=="её крышка" || $userAnswer=="крышка кастрюли" || $userAnswer=="крышка этой кастрюли" || $userAnswer=="крышка от этой кастрюли"){
								$score++;
							}
							$userAnswer = mb_strtolower($_GET["userAnswer3"]);
							if ($userAnswer=="разговор"){
								$score++;
							}
							echo "Вы угадали " . $score . " загадок";
						}
						?>

						<form method="GET">
							<p>У Олиной мамы пять дочек: Вика, Аня, Марта, Кира...<br>Как зовут пятую?</p>
							<input type="text" name="userAnswer1">

							<p>Что не вместится даже в самую большую кастрюлю?</p>
							<input type="text" name="userAnswer2">

							<p>Завязать можно, а развязать нельзя. Что это такое?</p>
							<input type="text" name="userAnswer3">

							<br>
							<input type="submit" value="Ответить" name="">
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
	<?php
	include "footer.php";
	?>


</body>
</html>