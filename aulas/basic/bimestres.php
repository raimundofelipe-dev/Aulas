<?php

$primeiroBimestre = [
    'Ana' => 10,
    'Bia' => 8,
    'Pedro' => 7,
    'beatriz' => 6,
    'leo' => 9,
];

$segundoBimestre = [
    'Ana' => 10,
    'Bia' => 8,
    'Pedro' => 4,
];

$alunosFaltantes = array_diff_key($primeiroBimestre, $segundoBimestre);
$nomesAlunos = (array_keys($alunosFaltantes));
$notasAlunos = (array_values($alunosFaltantes));

var_dump($nomesAlunos);
var_dump($notasAlunos );
?>

