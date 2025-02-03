<?php

 require_once 'function.php';

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
 letrasMaiusculas($contaCorente['123.456.123-08']);

 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Banco</title>
</head>
<body>
      <h1>CONTAS CORRENTES</h1>
      <?php foreach ($contaCorente as $cpf => $conta) { ?>
      <dl>
            <dt>
                <h3><?= $conta['titular']; ?> - <?=  $cpf ?></h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']?>;
            </dd>
            <?php } ?>
      </dl>
</body>
</html>

 