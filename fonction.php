<?php

function exibeMensagem($mensagem)
{
   echo $mensagem . PHP_EOL;
};

$contasCorentes = [
    '545.541.546-06' => [
        'titular' => 'pedro',
        'saldo' => 100
    ],
     '545.155.156-60' => [
         'titular' => 'joão',
         'saldo' => 180   
    ],
     '845.445.444-04' => [
        'titular' => 'lucas',
        'saldo' => 300
    ]
];
 if ( 500 > $contasCorentes['845.445.444-04']['saldo']){
    exibeMensagem ("Você não pode realizar esse saque");
 } else {
    $contasCorentes['845.445.444-04']['saldo'] -=500; 
 }
    
foreach ($contasCorentes as $cpf => $conta) {
     exibeMensagem ($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
exibeMensagem('terminou');
