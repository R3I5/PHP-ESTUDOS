<?php 

    # Crie um array com valores inteiros de 10 a 100, com incremento de 10;
    # Aplique um loop neste array; Quando entrar os valores 30 e 40, pule para a próxima execução;

    $arr = [10,20,30,40,50,60,70,80,90,100];
    $i = 0;

    while($i < count($arr)) {
        if ($arr[$i] == 30 || $arr[$i] == 40){
            $i++;
            continue;
        }
    echo "Elemento $arr[$i] <br>";
    $i++;
    }
    


?>