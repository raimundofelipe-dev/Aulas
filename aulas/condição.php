<?php

 $idade = 14;
 $numeroDePessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou, " ;
echo "a partir de 16 e tiver acompanhado.". PHP_EOL;

if ($idade >=18) {
    echo "Você tem $idade anos. Pode entrar sozinho" . PHP_EOL;
} else if ($idade >= 16 && $numeroDePessoas > 1) {
        echo "Você tem $idade anos e está acompanhado. Pode entrar.";
}else {
    echo "Você tem $idade anos. Não pode entrar.";
}
    


