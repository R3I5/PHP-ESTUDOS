<?php 
    # Crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes;
    # Faça um loop while para exibir apenas os dados que são strings

    $array = array(
    'val1' => 'abc',
    'val2' => 'def',
    'val3' => 13,
    'val4' => 1.5,
    'val5' => 'ghi',
    'val6' => 21,
    'val7' => 'jkl',
    'val8' => 33.5,
    'val9' => 'mno',
    'val10' => 'teste'
                    );

// Para cada item em $array, coloque o valor na variável $valor
    foreach ($array as $valor) {
        // VERIFICA se o valor é uma string
        if (is_string($valor)) {
        // Se for, exibe na tela
            echo $valor . "<br>";
        }
    }
?>