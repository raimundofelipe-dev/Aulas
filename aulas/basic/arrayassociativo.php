<?php

$conta1 = [
    'titular' => 'joão',
    'cotas' => 1000
];
$conta2 = [
    'titular' => 'jamal',
    'cotas' => 3000
];
$conta3 = [
    'titular' => 'jota',
    'cotas' => 20000
];
 $listaDeCotas = [$conta1, $conta2, $conta3];

foreach ($listaDeCotas as $conta) {
    echo $conta['titular'].PHP_EOL;
}

/* for ($i = 0;$i < count($listaDeCotas); $i++) {
    echo $listaDeCotas[$i] ['cotas'] .PHP_EOL; 
 }*/
