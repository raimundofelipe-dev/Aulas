<?php

 //require_once 'arquivo.php';

function depositar(array $conta , float $valorADepositar) : array
{
  if ($valorADepositar > 0){
   $conta['saldo'] += $valorADepositar;
  } else {
     exibirMensagem("depositos precisam ser positivos");
  }
    return $conta;
}

function sacar(array $conta , float $valorASacar) : array
{
   if ($valorASacar > $conta['saldo']){
      exibirMensagem("Você não pode realizar esse saque");
   } else {
      $conta['saldo'] -= $valorASacar; 
   }

   return $conta;
}

function exibirMensagem(string $mensagem)
{
   echo $mensagem . PHP_EOL;
}

function letrasMaiusculas(array &$conta)
{
   $conta['titular'] = mb_strtoupper($conta['titular']);
}


$contaCorente = [
   '123.456.123-08' => [
   'titular' => 'maria',
   'saldo' => 510
   ],
    '123.456.123-99' => [
    'titular' => 'felipe',
    'saldo' => 400
     ]
 ];

$contaCorente['123.456.123-99'] = depositar($contaCorente['123.456.123-99'], 600);

$contaCorente['123.456.123-08'] = sacar($contaCorente['123.456.123-08'], 110);

 letrasMaiusculas($contaCorente['123.456.123-99']);

foreach ($contaCorente as $cpf => $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
      exibirMensagem (
         "$cpf $titular $saldo"
      );
};

?>