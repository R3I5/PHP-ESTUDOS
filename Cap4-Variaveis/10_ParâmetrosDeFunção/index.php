<?php 

    # Os parâmetros de função também são considerados tipos de variaveis; Este recurso nos ajuda a criar funções com valores dinâmicos;
    # Este recurso nos ajuda a criar funções com valores dinãmicos; Podendo alterá-los a cada invocação da mesma;
    # Podemos passar mais de um parâmetro para uma função

    function soma($a, $b){

        echo $a + $b;
        echo"<br>";

    }

    soma(2,4);
    soma(6,8);
    soma(10,10); 


?>