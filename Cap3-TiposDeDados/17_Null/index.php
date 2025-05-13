<?php 

    # O tipo de dado Null tem apenas um valor, o NULL; Um caso de uso do Null seria checar se uma variavel tem ou não valor; 
    # Podemos checar se um valor é null com is_null()

    echo NULL;

    $nome = NULL; # Pode ser setada sem valor no inicio e ser atribuido um valor depois

    if(is_null($nome)){
        echo"$nome é NULL";
    }
    echo"<br>"; 

    $nome = 'João';

    if(is_null($nome)){
        echo"$nome não é mais NULL";
    }







?>