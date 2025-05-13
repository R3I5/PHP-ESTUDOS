<?php 

    # O boolean é um tipo de dado que só possui dois valores; True = verdadeiro; False = falso; Alguns valores são considerados como falsos: 0, 0.0, "0", [], "NULL"

    echo true;
    echo "<br>";
    echo false;

    if(true){
        echo"É verdadeiro! <br>";
    }
    if(5>2){
        echo"É verdadeiro!2 <br>";
    }

    $permissao = true;
    if($permissao) {
        echo"O usuario pode entrar";
    }


?>