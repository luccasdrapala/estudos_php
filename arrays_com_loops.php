<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	
	<?php
	
		$registros = [
			'Titulo noticia 1',
			'Titulo noticia 2',
			'Titulo noticia 3',
			'titulo 444444444'
		];


		echo '<pre>';
			print_r($registros);
		echo '</pre>';

		echo '<hr>';
		echo 'Percorrendo com while()<br>';

		$index = 0;

		while($index < count($registros)) {
			echo $registros[$index] . '<br>';
			$index++;
		}

		$registros['Titulo noticia 1'] = [
			'O titulo da noticia 1',
			'rodape noticia 1'
		];

		$registros['Titulo noticia 2'] = [
			'O titulo da noticia 2',
			'rodape noticia 2'
		];


		$registros['Titulo noticia 3'] = [
			'O titulo da noticia 3',
			'rodape noticia 3'
		];

		echo '<pre>';
			print_r($registros);
		echo '</pre>';

		echo '<hr>';

		while($index <3) {
			echo $registros[$index] . '<br>';
			$index++;
		}

	?>

</body>
</html>