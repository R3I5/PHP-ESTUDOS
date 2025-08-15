<?php 
    # Crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes;
    # Faça um loop while para exibir apenas os dados que são strings

    $array = array(
        'abc',
        'def',
        13,
        1.5,
        'ghi',
        21,
        'jkl',
        33.5,
        'mno',
        'teste'
    );

    $i = 0;
    while($i<= count($array)) {
        $valorAtual = $array[$i];
        if (is_string($valorAtual)){
            echo $valorAtual . "<br>";
        }
        $i++;
    }
?>