<?php

function geraEmail($nome)
{
    $conteudoDoEmail = <<<FIM
    Olá, $nome

    Estamos entrando em contato para
    {motivo do contato}

    {assinatura}

    FIM;

    echo $conteudoDoEmail;

}

geraEmail('Felipe');

?>