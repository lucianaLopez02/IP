<?php
echo "Ingrese sueldo inicial: ";

$sueldo_inicial = trim(fgets(STDIN));
echo "Ingrese sueldo final: ";
$sueldo_final = trim(fgets(STDIN));

$recargo = $sueldo_final - $sueldo_inicial;
$porc_aumento = ($recargo / $sueldo_inicial) *100;
echo "El porcentaje de aumento es: " .$porc_aumento. "\n";
 ?>
