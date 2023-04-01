<?php
echo "Ingrese la temperatura en grados centigrados: ";
$c = trim(fgets(STDIN));
$conversion = (9/5 * $c) + 32;
echo "La conversion de grados centigrados a Farenheit es: " .$conversion;
 ?>
