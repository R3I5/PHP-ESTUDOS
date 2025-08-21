<?php 

    # Crie um array de 10 a 20 com for; Faça um loop em cima do array criado dinamicamente;
    # Imprima apenas os números impares;

    $arr = [];
    for ($i = 10; $i <= 20; $i++){
        $arr[] = $i;
    }
    foreach($arr as $numero){
        if ($numero % 2 !=0){
            echo $numero . "\n";
        }
    }




?>