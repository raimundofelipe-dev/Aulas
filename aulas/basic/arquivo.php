<?php
$idade = [
    'leo' => null,
    'edu' => 6,
    'kevin' => '10',
    'felipe' => 5,
];

arsort($idade);
var_dump($idade);


echo 'aluguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $idade));

echo 'aluguém tirou 10?' . PHP_EOL;
echo array_search(10, $idade) . PHP_EOL;

echo 'edu fez a prova?' . PHP_EOL;
var_dump(array_key_exists('edu', $idade));

echo 'kevin fez a prova?' . PHP_EOL;
var_dump(isset($idade['kevin']));

//array_key_exist >verifica se a chave existe
//in_array > verifica se o valor existe
//isset > verifica se a chave existe e não é nula

?>