<?php
/*averiguar edad con el año actual*/
echo "Ingrese año de nacimiento: ";
$anio = trim(fgets(STDIN));
echo "Ingrese año actual: ";
$anio_actual = trim(fgets(STDIN));

$edad = $anio_actual - $anio;
echo "La edad actual de la persona es: " .$edad;

 ?>
