<?php
/*Calcular el resto y cociente de una division entera*/
echo "Ingresar el valor de A: ";
$a = trim(fgets(STDIN));
echo "Ingresar el valor de B: ";
$b = trim(fgets(STDIN));

$cociente =  (int) ($a/$b);
$resto =  $a - $cociente * $b ;
echo "El resto es:  " .$resto. " El cociente es: " .$cociente;
 ?>
