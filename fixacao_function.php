<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	
	<?php

		$salario = 6000;

		function calculaImposto($salario) {

			$valor_imposto = 0;

			if ($salario >= 1903.99 AND $salario <= 2826.65) {
				$valor_imposto = ($salario * 7.5) / 100;

			} else if ($salario >= 2826.66 AND $salario <= 3751.05) {
				$valor_imposto = ($salario * 15) / 100;

			} else if ($salario >= 3751.06 AND $salario <= 4664.68) {
				$valor_imposto = ($salario * 22.5) / 100;

			} else if ($salario >= 4664.68) {
				$valor_imposto = ($salario * 27.5) / 100;

			} else {
				$desconto = false;
			}

			return $valor_imposto;
		}

		echo 'O valor do imposto de renda é ' . calculaImposto($salario);

	?>

</body>
</html>