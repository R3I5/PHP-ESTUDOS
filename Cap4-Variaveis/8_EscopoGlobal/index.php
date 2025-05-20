<?php 

    # A principal caracteristica da variavel global é ser declarada fora de funções;
    # Por comportamento padrão não são acessiveis dentro de funções; Precisamos utilizar a palavra global para isso;
    # Essa função da variavel global não deve ser acessivel dentro de funções, previne muitos problemas no software

    $teste = "asd";

    echo "$teste global 1 <br>";

    if(5>2){

        $teste = "dsa";
        echo "$teste if <br>";


    }

    echo "$teste global 2 <br>";

    function testandoGlobal(){

        global $teste;
        echo "$teste global função <br>";
    }
    testandoGlobal();


?>