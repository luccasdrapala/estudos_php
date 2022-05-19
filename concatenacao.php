<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	
	<?php
		
		
		$nome = 'Luccas';
		$cor = 'Preto';
		$idade = 23;
		$gosto = 'Música';
		
		echo 'Ola '. $nome . ', sua cor favorita é ' . $cor . ', você tem ' . $idade . ' anos , gosta de ' . $gosto;
		echo '<br>';

		echo "Ola $nome, sua cor favorita é %cor, você tem $idade anos, gosta de $gosto";

	?>


</body>
</html>