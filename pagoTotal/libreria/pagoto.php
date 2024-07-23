<?php

$diastra = 30;
$valordia = 40000;
$sueldo = $diastra * $valordia;
$salud = $sueldo * 0.12; 
$pension = $sueldo * 0.16;
$arl = $sueldo * 0.12;
$descuento = $salud + $pension + $arl;
$pagototal = $sueldo - $descuento;


?>