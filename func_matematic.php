<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	
	<?php
		
		//funcoes matematicas

		$valor = 9;

		echo 'Valor digitado foi: ' . $valor;

		//arredonda para cima
		echo '<br>funcao ceil() retorna ' . ceil($valor);

		//arredonda para baixo
		echo '<br>funcao floor() retorna ' . floor($valor); 

		//Arredonda com base na fração <= 4 baixo / >= 5
		echo '<br>funcao round() retorna ' . round($valor); 

		//gera valor randomico - ao colocar 2 parametros, ele gera dentro desse intervalo
		echo '<br>funcao rand() retorna ' . rand(0, 10); 
		echo '<br>' . getrandmax();

		//Retorna a raiz quadrada de um numero
		echo '<br>funcao sqrt() retorna ' . sqrt($valor); 

	?>
	

</body>
</html>