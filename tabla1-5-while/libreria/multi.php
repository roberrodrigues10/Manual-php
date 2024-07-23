<?php

$multi = 0;

while ($multi < 5) {
    $multi++;
    $numero = 0;
while ($numero < 5) {
    $numero++;
    $producto = $numero * $multi;
    if ($producto % 2 == 0) {
        echo $multi . " x " . $numero. " = ". $producto. " Es buzz". "<br>";
    }
    else {
        echo $multi . " x " . $numero. " = ". $producto. " Es bass". "<br>";

    }
}
}

?>