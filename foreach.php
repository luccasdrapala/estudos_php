<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	
	<?php
		
		$itens = [
			'sofa',
			'mesa',
			'cadeira',
			'fogao',
			'geladeira'
		];

		echo '<pre>';
			print_r($itens);
		echo '</pre>';

		foreach ($itens as $item) {
			echo $item . '<br>';

			if ($item == 'mesa') {
				echo 'Oi tem mesa sim carai<br>';
			}
		}

		echo '<hr>';

		$funcionarios = array(
			array('nome' => 'Camille', 'salario'=> 2500, 'saudade' => '1000+'),
			array('nome' => 'Luccas', 'salario'=> 2499),
			array('nome' => 'Luiz', 'salario'=> 7000),
		);
		
		echo '<pre>';
			print_r($funcionarios);
		echo '</pre><br>';

		/*foreach($funcionarios as $idx => $funcionario){
			print_r($funcionario);
			echo '<br>';
		}
		*/
		foreach($funcionarios as $idx => $funcionario){
			
			foreach ($funcionario as $idx2 => $value) {
				echo "$idx2 - $value<br>";
			}
		}



	?>

</body>
</html>