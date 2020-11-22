<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">
		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function generatePass(){
			var password = "";
			var symbols = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!№;%:?*()_+=";
			for (var i = 0; i < 13; i++){
				password += symbols.charAt(Math.floor(Math.random() * symbols.length));     
			}
			return password;
		}

		function getPass(){
			write("Ваш пароль: <br>" + generatePass());
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

					<h1>Генератор паролей</h1>

					<div class="box">

						<p id="info">Нажмите чтобы сгенерировать пароль.</p>
						<a href="#" onClick="getPass();" id="button">Генерировать</a>				
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