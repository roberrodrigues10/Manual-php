<?php

$contar = 0;
$numero = 5;

for ($contar = 1; $contar <= $numero; $contar++) {
    if ($contar % 2 == 0) {
        echo $contar . " Es par" . "<br>";
    }
    else {
        echo $contar . " Es impar" . "<br>";
    }
}

?>
