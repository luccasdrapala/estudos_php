<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	
	<?php
		
        $pessoa = [
            'nome' => 'Luccas',
            'sobrenome' => 'Drapala'
        ];

        echo '<pre>';
            print_r($pessoa);
        echo '</pre>';

        
        echo 'Função is_array: ' . is_array($pessoa) . '<hr>';

        //transforma as chaves dos array em um outro array
        $keys = array_keys($pessoa);
        echo 'Função array_keys: ' . print_r($keys) . '<hr>';

        $frutas = ['babana', 'abacaxi', 'uva', 'melancia'];
        echo '<pre>';
            print_r($frutas);
        echo '</pre>' . '<br>';

        //ordena por ordem alfabetica, sem mudar indices;
        asort($frutas); 
        echo '<pre>';
            print_r($frutas);
        echo '</pre>' . '<hr>';

        //ordena por ordem alfabetica, mas adapta indicas;
        sort($frutas); 
        echo '<pre>';
            print_r($frutas);
        echo '</pre>' . '<hr>';

        echo '<pre>';
            print_r($frutas);
            echo count($frutas);
        echo '</pre>' . '<hr>';

        //merge junta os arrays
        $novo_array = array_merge($frutas, $pessoa);
        echo '<pre>';
            print_r($novo_array);
        echo '</pre>' . '<hr>';

        //explode
        $string = '15/04/2022';
        $retorno = explode('/', $string);
        echo '<pre>';
            print_r($retorno);
        echo '</pre>' . '<hr>';

        //implode
        $string = implode('-', $retorno);
        echo '<pre>';
            print_r($string);
        echo '</pre>' . '<hr>';


	?>

</body>
</html>