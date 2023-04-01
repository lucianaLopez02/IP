<?php

 echo "Ingresar distancia de A: ";
 $a = trim(fgets(STDIN));
 echo "Ingresar distancia b: ";
  $b = trim(fgets(STDIN));
 $c = sqrt(($a * $a) + ($b * $b));
echo "La distancia es: " .$c. "metros";
 ?>
