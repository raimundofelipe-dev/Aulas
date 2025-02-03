<?php 

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
   echo $mensagem . '<br>';
}

function letrasMaiusculas(array &$conta)
{
   $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibiconta(array $conta)
{
    ['saldo' => $saldo ,  'titular' => $titular] = $conta;
    echo "<li>Titular : $titular . Saldo : $saldo </li>";
}
?>