<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 1</title>
</head>
<body>

	<form method="post" action="">
		Digite o primeiro numero <input type="text" name="num1"><br>
		Digite o segundo numero <input type="text" name="num2">
		<button name="btSomar">Somar</button>
	</form>

	<?php 

		if (isset($_POST['btSomar'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];

			$soma = $num1 + $num2;
			$mult = $soma * $num1;

			echo " O resultado da soma é $soma <br>
				   O resultado da soma, multiplicado pelo primeiro numero é $mult	
			";
		}
	 ?>
</body>
</html>