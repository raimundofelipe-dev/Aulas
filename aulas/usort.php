<?php 

$notas = [
    [
    'aluno' => 'joão',
    'nota' => 10
    ],
    [
    'aluno' => 'Ana',
    'nota' => 6
    ],
    [
    'aluno' => 'Maria',
    'nota' => 9
    ],
];

function notasOrdenadas(array $nota1, array $nota2) :int
{
     return $nota1['nota'] <=> $nota2['nota'];
}

usort( $notas, 'notasOrdenadas');
var_dump($notas); 























?>