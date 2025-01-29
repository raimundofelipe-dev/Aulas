<?php 

function depositar($conta , $valorADepositar){
   $conta['saldo'] += $valorADepositar;

   return $conta;
}

function sacar($conta , $valorASacar)
{
   if ($valorASacar > $conta['saldo']){
      exibirMensagem("Você não pode realizar esse saque");
   } else {
      $conta['saldo'] -= $valorASacar; 
   }

   return $conta;
}

function exibirMensagem($mensagem){
   echo $mensagem . PHP_EOL;
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

$contaCorente['123.456.123-08'] = sacar($contaCorente['123.456.123-08'], 500);

 foreach ($contaCorente as $cpf => $conta){
   exibirMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
 };
  









/*function adiciona2($x){
   return $x + 2;
}
$resultado = adiciona2(10);

echo $resultado;
*/







?>