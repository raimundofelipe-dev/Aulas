<?php

require_once 'function.php';

$primeiraConta = new Conta('630.888.888-00','Felipe Oliveira', 650);
$segundaConta = new Conta('987.654.321-00','Silvana',1200);
$terceiraConta = new Conta('000.000.000-00','Ibson',10);


$primeiraConta->sacar(50);
$segundaConta->depositar(100);
$primeiraConta->transferir(200, $terceiraConta);


echo $primeiraConta->recuperaCpf() . ' Nome :' . $primeiraConta->recuperaNome() . ' Saldo de :' .  $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $segundaConta->recuperaCpf() . ' Nome :' . $segundaConta->recuperaNome() . ' Saldo de :' .  $segundaConta->recuperaSaldo(). PHP_EOL;
echo $terceiraConta->recuperaCpf() . ' Nome :' . $terceiraConta->recuperaNome() . ' Saldo de :' . $terceiraConta->recuperaSaldo(). PHP_EOL;
?>