<?php 

    # PHP possui o paradigma de orientação a objetos; Podemos criar classes e objetos, e o objeto é considerado um tipo de dado;
    # Objetos possuem métodos que são suas ações e propriedades que são suas caracteristicas;
    # Veremos objetos em maiores detalhes futuramente no curso;

    class Pessoa {
        public $nome;

        function falar(){
            echo "Ola pessoal!";
        }

    }

    $joao = new Pessoa();

    $joao->nome = "Joao";

    echo $joao->nome;

    echo"<br>";

    $joao->falar();


?>