<?php 

    # Crie um loop que vai até o número 30; O contador deve iniciar como 4; Faça incrementos de 2 em 2 no contador;
    # Utilize break para parar o loop quando chegar no número 24;

    $i = 4; 
    while($i < 30){
        $i+=2;
        echo "Executando $i <br>";
        if($i == 24){
            break;
        }
    }






?>