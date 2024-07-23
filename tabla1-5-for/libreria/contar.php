<?php

$multi = 0;

for ($multi = 1; $multi <= 5; $multi++) {
    $numero = 0;
for ($numero = 1; $numero <= 5; $numero++) {
    $producto= $multi * $numero;
    if ($producto % 2 == 0) {
        echo $multi . " x " . $numero. " = ". $producto. " Es buzz". "<br>";
    }
    else {
        echo $multi . " x " . $numero. " = ". $producto. " Es bass". "<br>";

    }
}
}

?>
