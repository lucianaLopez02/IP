<?php 
echo "ingrese tiempo total: hh:mm:ss ";
$tiempo = trim(fgets(STDIN)); // 24640

/*$tiempo1 = (int)($tiempo/10000) ;
$tiempo2= $tiempo % 1000;
$tiempo3 = (int)($tiempo2/10000);
$tiempo4  = $tiempo1 % 100;
echo "Esa cantidad corresponde a segundos " .$tiempo1; 
echo "Esa cantidad corresponde a segundos " .$tiempo4; */

 $hh = $s / 3600;
 $mm = (segundos - $hh * 3600) / 60; 
 $ss = segundos - $hh * 3600 - mm * 60; 
 echo "Esa cantidad corresponde a %d horas, %d minutos y %d segundosn" .$hh.$mm.$ss;
?>
