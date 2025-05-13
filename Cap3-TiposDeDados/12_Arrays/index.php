<?php 

    # O array é um tipo de dado que serve para agrupar um conjunto de valores; Podemos inserir qualquer tipo de dado na lista;
    # A sintaxe é [1,2,3,4,5]; Sempre entre [] e dados separados por , ;

    $a = [1,2,3];
    echo "$a <br>"; # Escreve "Array" o valor da lista não pode ser convertido em string
    print_r($a); # Imprime a estrutura do array, mostrando o indice e o valor do mesmo
    echo "<br>";
    echo $a[0]; # Imprime o valor do primeiro indice
    echo "<br>";
    $arr = [3, "João", true]; # O array pode armazenar diferentes tipos de dados
    print_r($arr);

?>