
<?php

$email = 'uflpe@gmail.com';
$senha = '123';

echo strlen($senha) . PHP_EOL;

$posicaoDoArroba = strpos($email, '@');

echo substr($email, 0, $posicaoDoArroba) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1);


//substr busca um pedaço da strings
//strpos buca a posição
//srtlen busca o comprimento
?>