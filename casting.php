<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	
	<?php
		
		//gettype() => retorna o tipo da variável
		$valor = 10;
		$valor2 = (float) $valor;
		$valor3 = (string) $valor2;
		$valor4 = (bool) $valor2;

		echo gettype($valor);
		echo '<br>';
		echo gettype($valor2);
		echo '<br>';
		echo gettype($valor3);
		echo '<br>';
		echo gettype($valor4);

	?>

</body>
</html>