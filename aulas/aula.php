<?php

$nome = 'raimundo felipe neto';

//buscando uma string str_contains
$ehdafamilia = str_contains($nome, 'peto');

if($ehdafamilia){
    echo"$nome é da minha familia" . PHP_EOL;
} else {
    echo "$nome não é da familia" . PHP_EOL;
};

// str_starts_with verifica se começa com texto especfico
// str_ends_with termina com com texto especfico
?>