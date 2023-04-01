<?php
/*Porcentaje de x de y*/
 echo "Ingrese el valor de x: ";
 $x = trim(fgets(STDIN));
 echo "Ingrese el valor de y: ";
 $y = trim(fgets(STDIN));

 $porcentaje = ($x * 100)/$y;
 echo "El porcentaje que representa x de y es: " .$porcentaje;

 ?>
