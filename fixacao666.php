<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	
	<?php
		
		$numeros = array();

		while(count($numeros) <= 5){

			$num = rand(1, 60);
			if(!in_array($num, $numeros)){
				$numeros[] = $num;
			}

		}

		echo '<pre>';
			print_r($numeros);
		echo '</pre>';

	?>

</body>
</html>