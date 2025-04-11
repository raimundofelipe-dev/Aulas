<?php

class Conta 
{
    //definir dados da conta
   private string $cpfTitular;
   private string $nomeTitular;
   private float $saldo;

   public function __construct(string $cpfTitular, string $nomeTitular, $saldo = 0)
   {
    $this->cpfTitular = $cpfTitular;
    if (strlen($nomeTitular) < 5){
       echo 'Nome precisa ter pelo o menos 5 cacacters'; 
       exit();
    }
    $this->nomeTitular = $nomeTitular;
    $this->saldo = $saldo;
   }

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

public function recuperaSaldo():float
 {
    return $this->saldo;
 }
 public function recuperaNome():string
 {
  return $this->nomeTitular;
 }

 public function recuperaCpf():string
 {
    return $this->cpfTitular;
 }
}
