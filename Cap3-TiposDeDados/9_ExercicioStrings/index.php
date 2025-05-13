<?php 

    # Crie um arquivo PHP; Imprima textos com aspas duplas e também com aspas simples;

    $nome = "João";
    $nome2 = "Victor";

    if(is_string($nome)){
        echo("O dado $nome é uma string <br>");
    }
    if(is_string($nome2)){
        echo('O dado $nome2 também é uma string <br>');
    }

    echo("$nome e $nome2 são strings")




?>