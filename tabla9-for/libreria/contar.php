<?php

$multi = 8;
$numero = 0;

for ($numero = 1; $numero <= 5; $numero++) {
    $producto = $numero * $multi;
    if ($producto % 2 == 0) {
        echo $multi . " x " . $numero. " = ". $producto. " Es par". "<br>";
    }
    else {
        echo $multi . " x " . $numero. " = ". $producto. " Es impar". "<br>";

    }
}

?>
