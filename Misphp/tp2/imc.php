<?php
echo "Ingrese su peso en kg: ";
$kg = trim(fgets(STDIN));
echo "Ingrese su altura en m: ";
$m = trim(fgets(STDIN));

$imc = $kg / ($m * $m);
echo "El indice de Masa corporal de la persona es: " .$imc;
 ?>
