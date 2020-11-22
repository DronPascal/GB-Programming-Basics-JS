<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var maxTryCount = 10;
		var player = 1;

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function guess(){
			tryCount++;
			player = (player == 2) ? 1 : ++player;

			var userAnswer = readInt();
			if(userAnswer == answer){
				write("Поздравляю, вы угадали!" + "Победил <b>" + (player == 1 ? "второй" : "первый") + "</b> игрок!");
				hide("button");
				hide("userAnswer");
			} else if(tryCount >= maxTryCount){
				write("Никто не успел победить<br>Правильный ответ: " + answer);
				hide("button");
				hide("userAnswer");
			} else if(userAnswer > answer){
				write("Вы ввели слишком большое число<br>Теперь <b>ходит " + (player == 1 ? "первый" : "второй") + "</b> игрок");
			} else if(userAnswer < answer){
				write("Вы ввели слишком маленькое число<br>Теперь <b>ходит " + (player == 1 ? "первый" : "второй") + "</b> игрок");				
			}
		}
	</script>
</head>
<body>

	<div class="content">
		<?php
		include "menu.php";
		?>

		<div class="contentWrap">
			<div class="content">
				<div class="center">

					<h1>Игра угадайка</h1>

					<div class="box">

						<p id="info">Угадайте число от 0 до 100</p>
						<input type="text" id="userAnswer">
						<br>
						<a href="#" onClick="guess();" id="button">Начать</a>				
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