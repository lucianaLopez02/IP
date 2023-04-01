<?php
/*Averiguar area de un rectangulo*/
echo "Ingrese longitud del ancho: ";
$ancho = trim(fgets(STDIN));
echo "Ingrese longitud del largo:  ";
$largo = trim(fgets(STDIN));

$area = $ancho * $largo ;
echo "El area del rectagulo es: " .$area;
 ?>
