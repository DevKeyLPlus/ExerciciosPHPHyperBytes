<!DOCTYPE html>
<html>
<head>
	<title>Exercicios 3</title>
</head>
<body>

	<form method="post" action="">
		Digite um numero <input type="text" name="num1">
		<button name="btCalcular">Calcular</button>
	</form>

	<?php 

		if (isset($_POST['btCalcular'])) {
			$num1 = $_POST['num1'];

			$calc = ($num1 /100) * 15;

			echo "15% de $num1 é $calc";
		}


	 ?>

</body>
</html>