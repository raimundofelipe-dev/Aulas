<?php

$contasCorentes = [
    5455415466 => [
        'titular' => 'pedro',
        'saldo' => 100
    ],
     5451551566 => [
         'titular' => 'joão',
         'saldo' => 180   
    ],
     8454454444 => [
        'titular' => 'lucas',
        'saldo' => 150
    ]

];
 $contasCorentes[8454455555] = [
    'titular' => 'maria',
    'saldo' => 450
 ];
 $contasCorentes[4444455555] = [
    'titular' => 'jota',
    'saldo' => 100000000
 ];

foreach ($contasCorentes as $cpf => $conta) {
    echo $conta['saldo'] . PHP_EOL;
} 








