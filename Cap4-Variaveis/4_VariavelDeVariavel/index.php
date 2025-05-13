<?php 

    # Podemos criar uma váriavel por meio de outra variavel, com um valor diferente; O simbolo para esta função é o $$
    # $x = "teste";
    # $$x = 5;
    # Após a execução do código, a variavel teste(conteudo de $x), será criada com o valor de 5; 

    $x = "nome"; # nome esta dentro da variavel X
    echo "$x <br>";

    $$x = "João"; # joao esta dentro do conteudo da variavel X, que no caso é nome
    echo"$nome <br>";




?>