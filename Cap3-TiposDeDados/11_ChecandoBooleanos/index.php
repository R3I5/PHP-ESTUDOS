<?php 

    # Podemos utilizar a função is_boolean() para verificar se um dado é boolean; A função recebe um valor como parâmetro; Recebemos true or false; Precisamos de um if

    $verdadeiro = true;
    $falso = false;

    if(is_bool($verdadeiro)){
        echo("$verdadeiro é True! <br>");
    }

    if(is_bool($falso)){
        echo("$falso é False! <br>");
    }




?>