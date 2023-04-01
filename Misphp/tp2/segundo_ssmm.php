<?php
echo "Ingrese la cantidad de segundos que tarda en realizar la copia: ";
$seg = trim(fgets(STDIN));

$min = (int) ($seg / 60);
$seg_f = $seg - ($min * 60);
echo "La cantidad de segundos a mmss son: " .$min. " y segundos: " .$seg_f;
 ?>
