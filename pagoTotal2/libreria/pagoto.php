<?php

$diastra = 30;
$valordia = 40000;
$sueldo = $diastra * $valordia;
$salud = $sueldo * 0.12; 
$pension = $sueldo * 0.16;
$arl = $sueldo * 0.052;
$descuento = $salud + $pension + $arl;

if ($sueldo < 2300000) {
     $subtra = 162000;
}
else{
     $subtra = 0;
}
$pagototal = $sueldo + $subtra - $descuento;



?>