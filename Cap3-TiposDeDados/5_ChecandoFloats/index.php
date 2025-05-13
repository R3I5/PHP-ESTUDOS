<?php 


    # Podemos validar se um dado é inteiro com a função is_float(); Caso seja float, será retornado true
    # Caso não seja, recebemos um retorno de false; Preciasmos utilizar um if() para validar


    if(is_float(1.5)){
        echo('É float <br>');
    }
    if(is_float(2)){
        echo('Não é float <br>');
    }

    $a = 10.2;
    if(is_float($a)){ 
        echo('a é float');
    }




?>