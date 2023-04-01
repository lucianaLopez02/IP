<?php 
 echo "Duracion maxima de llamada corta: Su tarifa: ";
 echo "Duracion maxima de llamada larga: Su tarifa: ";
 echo "Ingrese duracion maxima de la llamada(seg): ";
 $duracion = trim(fgets(STDIN)); //300 seg
    if ($duracion >= $duracion_max){
        echo "Es una llamada larga, se aplicara la siguiente tarifa: ";
        $tarifa_a = ;
    }else{
        echo "Es una llamada corta, se aplicara la siguiente tarifa: ";
        $tarifa_b = ;
    }

?>
