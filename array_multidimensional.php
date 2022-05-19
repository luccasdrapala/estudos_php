<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	
	<?php
		
		$lista_coisas = [];

		$lista_coisas['pessoa'] = [
							'nome' => 'Luccas',
							'sobrenome' => 'Drapala',
							'idade' => 23,
							'partido' => 'PT'
						];

		$lista_coisas['profissão'] = [
							'empresa' => 'Mallon',
							'cargo' => 'T.I',
							'carga_horaria' => 8
						];

		echo '<pre>';
			print_r($lista_coisas);
		echo '</pre><hr>';

		echo $lista_coisas['pessoa']['nome'];

	?>

</body>
</html>