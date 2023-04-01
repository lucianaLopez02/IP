<?php
/* Visualizar segundos a Horas, Minutos, Segundos */
/*int $seg , $calc_h $calc_m $calc_s */

echo "Ingrese cantidad x de segundos: ";
$seg = trim(fgets(STDIN)); //3795
$calc_h = (int)($seg/3600);
$calc_m = (int)(($seg - $calc_h * 3600)/60);
$calc_s = $seg - $calc_h*3600 - $calc_m * 60;

echo $seg." equivalen a " .$calc_h. " hora " .$calc_m. " minutos " .$calc_s. " segundos ";


