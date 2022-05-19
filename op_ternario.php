<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	
	<?php

		$usuario_possui_cartao_loja = false;
		$valor_compra = 250;
		$valor_frete = 50;
		$recebeu_desconto_frete = false;

		if($usuario_possui_cartao_loja AND $valor_compra >= 400){
			$valor_frete = 0;
			$recebeu_desconto_frete = true;

		} else if($usuario_possui_cartao_loja AND $valor_compra >= 300 ) {
			$valor_frete = 10;
			$recebeu_desconto_frete = true;

		} else if ($usuario_possui_cartao_loja AND $valor_compra >= 100) {
			$valor_frete = 25;
			$recebeu_desconto_frete = true;
		}
	?>

	<h1>Detalhes do pedido</h1>
	<p>
		Possui cartão da loja?
		<?php
			$usuario_possui_cartao_loja ? 'SIM' :'NÂO';
		?>
	</p>

	<p>
		Qual o valor da compra? <?= $valor_compra?>
		
	</p>

	<p>
		Recebeu desconto no frete?
		<?php

			$teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';
			echo $teste;
		?>
	</p>

	<p>
		Qual o valor do frete? <?= $valor_frete?>
		
	</p>



</body>
</html>