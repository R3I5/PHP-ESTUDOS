<?php 

    # Podemos criar uma variavel com referencia a outra; O simbolo é =&;
    # Se mudamos a variavel de referencia a referenciada muda o valor e ao contrario tambem gera mudança
    # $x = 2;
    # $y =& $x;

    $x = 10;
    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 15;

    echo"Atribuição pós ref";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 20;

    echo"Atribuição pós ref2";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";



?>