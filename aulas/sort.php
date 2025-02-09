<?php 

$ordem = [
   'Pedro' => null,
   'joão' => 8,
 
];

$notasOrdenadas = $ordem;
sort($notasOrdenadas);

echo 'desordenadas :' . PHP_EOL;
var_dump($ordem);

echo 'Ordenadas :' . PHP_EOL;
var_dump($notasOrdenadas);


/*if (is_array($ordem))
{
   echo 'Sim, é um array' . PHP_EOL;
}*/

var_dump(array_is_list($ordem));

echo 'joão fez a prova?' . PHP_EOL;
var_dump(array_key_exists('joão', $ordem));

echo 'pedro fez a prova ?' . PHP_EOL;
var_dump(isset($ordem['Pedro']));



?>