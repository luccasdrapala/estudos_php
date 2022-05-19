<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	
	<?php
		
		//funcao void (sem retorno)
		function exibirBoasVindas() {
			echo '<h1>Hello World</h1>';

		}

		$x = exibirBoasVindas();

		$largura = 40;
		$comprimento = 40;

		function calcularAreaTerreno($largura, $comprimento) {
			$area = $largura * $comprimento;
			return $area;
		}

		$meuterreno = calcularAreaTerreno($largura, $comprimento);

		echo 'A area do meu terreno é ' . $meuterreno . ' metros quadrados';

	?>

</body>
</html>