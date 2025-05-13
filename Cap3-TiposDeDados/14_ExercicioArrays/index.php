<?php 

    # Crie um arquivo PHP; Crie um array com caracteristicas de um carro; Imprima duas caracteristicas

    $carro = [
        'marca' => 'Peugeot',
        'modelo' => '208',
        'ano' => '2025',
        'cor' => 'preto'];

    echo $carro['marca']; 
    echo"<br>";
    echo $carro['modelo'];
    echo"<br>";
    echo $carro['cor'];
    echo"<br>";

    $marca = $carro['marca'];
    $modelo = $carro['modelo'];

    echo "O carro é da marca $marca e o seu modelo é o $modelo";


?>