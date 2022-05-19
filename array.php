<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	
	<?php
		
		//arrays sequenciais (numérocos)
		$lista_frutas = array('Banana', 666, 'Morango', 'Uvas');
		// ou
		// $lista_frutas = ['Banana', 666, 'Morango', 'Uvas'];

		$lista_frutas[] = 'Abacaxi';

		echo '<pre>';
			var_dump($lista_frutas);
		echo '</pre>';
		echo '<hr>';
		echo '<pre>';
			print_r($lista_frutas);
		echo '</pre>';

		echo '<hr>';

		echo $lista_frutas[2];
		echo '<hr>';
		//arrays associativos

		$pessoa = [
			'nome' => 'Luccas',
			'sobrenome' => 'Drapala',
			'idade' => 23,
			'peso' => 80,
			'profissao' => 'T.I'
			];

		echo '<pre>';
			var_dump($pessoa);
		echo '</pre>';

		echo '<hr>';

		$pessoa['partido'] = 'PT';

		echo '<pre>';
			var_dump($pessoa);
		echo '</pre>';

	?>

</body>
</html>