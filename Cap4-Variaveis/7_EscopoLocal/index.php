<?php 

    # A variável local tem seu escopo definido dentro de uma função; Ela não é acessivel fora da mesma;
    # O seu valor sempre é resetado quando a função é finalizada; Obs: Veremos funções em detalhes futuramente;

    $x = 10;
    echo "$x global <br>";

    function teste() {
        
        $x = 5;
        
        echo "$x local <br>";
    }

    $x = 99;

    function testando() {

        $x = 12;
        echo "$x local 2 <br>";
    }
    teste();
    testando();
    echo "$x global 2 <br>";

?>