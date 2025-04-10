<?php

/*$contador = 1;

while ($contador <= 100) {
echo "#$contador" .PHP_EOL;
$contador = $contador + 2;
}
*/

for ($contador = 1; $contador < 100; $contador++) {
    if ($contador %  2 != 0) {
        echo $contador . PHP_EOL;
    }
 }
