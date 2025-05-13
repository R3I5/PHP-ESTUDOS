<?php 

    # Crie um arquivo PHP; Crie um array associativo com caracteristicas de uma pessoa; Desafio: faça um if checando se ela é maior de idade e imprima uma mensagem caso seja;

    $pessoa = [
        'nome' => 'João',
        'idade' => '20',
        'altura' => '1.70',
        'profissao' => 'desenvolvedor web',
        'curso' => 'Engenharia de software'
    ];

    $nome = $pessoa['nome'];
    $idade = $pessoa['idade'];
    $profissao = $pessoa['profissao'];
    $altura = $pessoa['altura'];

    echo"$nome tem $idade anos e é $profissao <br>";
    if($idade>=18){
        echo"$nome é maior de idade!";
    }



?>