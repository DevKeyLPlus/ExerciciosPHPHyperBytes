<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 4</title>
</head>
<body>

	<form method="post" action="">
		Digite um numero <input type="text" name="num1">
		<button name="btCalcular">Calcular</button>
	</form>

	<?php 

		if (isset($_POST['btCalcular'])) {
			$num1 = $_POST['num1'];

			$cinquenta = ($num1 /100) * 50;
			$cinco = ($num1 /100) * 5;

			echo "50% de $num1 é $cinquenta e 5% de $num1 é $cinco";
		}

	 ?>

</body>
</html>