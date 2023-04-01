<?php

/* Averiguar el valor de cuota */

echo "Ingrese la suma de dinero: ";
$suma_dinero = trim(fgets(STDIN));
echo "Ingrese la cantidad de cuotas: ";
$cant_cuotas = trim(fgets(STDIN));
echo "Ingrese el porcentaje de interes que se aplica a la cuota: ";
$porc_interes = trim(fgets(STDIN));
$aumento = $porc_interes*$suma_dinero/100;
$recargo = $suma_dinero + $aumento;
$valor_cuota = $recargo / $cant_cuotas;

echo "El valor de cada cuota es: " .$valor_cuota. "\n";
 ?>
