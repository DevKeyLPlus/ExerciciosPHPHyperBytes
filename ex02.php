<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		numero1 <input type="text" name="num1"><br>
		numero2 <input type="text" name="num2"><br>
		numero3	<input type="text" name="num3"><br>
		<button name="btCalcular">Calcular</button>
	</form>

	<?php 

		if (isset($_POST['btCalcular'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$num3 = $_POST['num3'];

			$media = ($num1 + $num2 + $num3)/3;

			echo "A media dos numeros digitados é $media";
		}


	 ?>

</body>
</html>