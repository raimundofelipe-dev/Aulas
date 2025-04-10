<?php

class Conta 
{
    //definir dados da conta
   public string $cpfTitular;
   public string $nomeTitular;
   public float $saldo;
}

$primeiraConta = new Conta();
$primeiraConta->cpfTitular = '630.888.888-00';
$primeiraConta->nomeTitular = 'Felipe Oliveira';
$primeiraConta->saldo = 10000;
var_dump($primeiraConta);

?>