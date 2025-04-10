<?php

class Conta 
{
    //definir dados da conta
   public string $cpfTitular;
   public string $nomeTitular;
   public float $saldo = 0;

   public function sacar(float $valorASacar)
   {
       if ($valorASacar > $this->saldo) {
        echo 'Saldo Indisponivel';
        return;
      } 

        $this->saldo -= $valorASacar;
   }

public function depositar(float $valorADepositar):void
{ 
     if ($valorADepositar <= 0) {
     echo 'O valor do depósito precisa ser positivo.';
     return;
     } 

     $this->saldo += $valorADepositar;
}

 public function transferir( float $valorATransferir, Conta $contaDestino):void
{
      if($valorATransferir > $this->saldo) {
      echo 'Saldo Indisponivel' . PHP_EOL; 
      return;
    }
  
    $this->sacar($valorATransferir);
    $contaDestino->depositar($valorATransferir);
  }
}

$primeiraConta = new Conta();
$primeiraConta->cpfTitular = '630.888.888-00';
$primeiraConta->nomeTitular = 'Felipe Oliveira';
$primeiraConta->saldo = 650;


$segundaConta = new Conta();
$segundaConta->cpfTitular = '987.654.321-00';
$segundaConta->nomeTitular = 'Silvana';
$segundaConta->saldo = 1200;

$terceiraConta = new conta();
$terceiraConta->nomeTitular = 'Ibson';


$primeiraConta->sacar(2);
var_dump($primeiraConta);

$segundaConta->depositar(50);
var_dump($segundaConta);

$segundaConta->transferir(10, $terceiraConta);
var_dump($segundaConta);
var_dump($primeiraConta);
var_dump($terceiraConta);


?>