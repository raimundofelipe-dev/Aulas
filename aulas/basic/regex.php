<?php

$telefones = ['(92) 5555-5555','(90) 1111-1111','(98) 3333-2222'];

foreach($telefones as $telefone){

    $regex ='/^(\([0-9]{2}\)) (9?[0-9]{4}-[0-9]{4})$/';

    $telefoneValido = preg_match(
        '/^(\([0-9]{2}\)) (9?[0-9]{4}-[0-9]{4})$/',
     $telefone,
     $correspondencia
    );

    if($telefoneValido){
        echo 'Telefone Válido' . PHP_EOL;
    } else {
        echo 'Telefone Invalído' . PHP_EOL;
    }

    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone
    ) . PHP_EOL;


};


?>