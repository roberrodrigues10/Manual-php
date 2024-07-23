<?php

$lado1 = 50;
$lado2 = 13;
$lado3 = 14;
$cuad1 = $lado1 * $lado1;
$cuad2 = $lado2 * $lado2;
$cuad3 = $lado3 * $lado3;

if ($cuad1 == $cuad2 & $cuad2 == $cuad3 & $cuad3 == $cuad1) {
    echo ("Son iguales");
}
else if ($cuad1 > $cuad2 & $cuad1 > $cuad3) {
    echo "Cuadrado uno es mayor";
}
else if ($cuad2 <  $cuad3) {
    echo "Cuadrado 3 es mayor";
}
else{
    echo ("Numero dos es mayor") ;
}
?>
   <br>

<?php

function area($lado1, $lado2, $lado3){

    $cuad1 = $lado1 * $lado1;
    $cuad2 = $lado2 * $lado2;
    $cuad3 = $lado3 * $lado3;
    if ($cuad1 == $cuad2 & $cuad2 == $cuad3 & $cuad3 == $cuad1) {
        echo "Son iguales" . "<br>";
    }
    else if ($cuad1 > $cuad2 & $cuad1 > $cuad3) {
        echo "Cuadrado uno es mayor";
    }
    else if ($cuad2 <  $cuad3) {
        echo "Cuadrado 3 es mayor";
    }
    else{
        echo ("Numero dos es mayor") ;
    };
    };
    $areas = area(1,1,1)
?>