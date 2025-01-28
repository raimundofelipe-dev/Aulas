<?php 

$peso = 60;
$altura = 1.70;

echo $imc = $peso / ($altura * $altura);
    if ($imc < 18 ) {
        echo 'Você está abaixo do peso';
    }else {
        if ($imc > 18 && $imc < 25) {
            echo 'Você com o seu peso ideal';
        }
    }  if($imc > 25) {
            echo 'Você está acima do peso';
        }
    
  
            
      


