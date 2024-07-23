<?php

$anioNac1 = 2000;
$anioNac2 = 2014;
$anioNac3 = 2022;
$anioAct = 2024;

$edad1 = $anioAct - $anioNac1;
$edad2 = $anioAct - $anioNac2;
$edad3 = $anioAct - $anioNac3;
$promedio = ($edad1 + $edad2 + $edad3)/3;

if ($promedio >= 18) {
    echo ("Cumple con la mayoria de edad") ;
}           
else{
    echo ("No cumple con la mayoria de edad") ;
}
?>