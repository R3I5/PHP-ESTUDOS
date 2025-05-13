<?php 

    # Podemos valiudar se um dado é inteiro com a função is_int(); Caso um número seja inteiro, será retornado true
    # Caso não seja, recebemos um retorno de false; Preciamos utilizar uma estrutura if para validar o valor;



    if(is_int(5)){
        echo('É um inteiro <br>');
    }
    if(is_int('Não é um inteiro <br>')){
        echo('Não é um inteiro 2');
    }

    $a = 10;
    if(is_int($a)){
        echo('É um inteiro 3');
    }


?>