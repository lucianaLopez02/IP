<?php
/* intercambio de variables  */
echo "Ingrese primera variable: ";
$v1 = trim(fgets(STDIN));
echo "Ingresesegunda variable: ";
$v2 = trim(fgets(STDIN));

$auxiliar = $v1;
$v1 = $v2;
$v2 = $auxiliar;

echo "El valor actual de la variable v1 es: " .$v1. "\n";
echo "El valor actual de la variable v2 es: " .$v2. "\n";
 ?>
