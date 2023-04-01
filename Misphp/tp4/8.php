<?php 
/**calcular agua destilada con cantidad de loratadina y betametasona
 * 
 */ 
function calcAguaDestilada ($cant_b,$cant_l){
    $calc_destilada = (($cant_b*10)/100) + (($cant_l*15)/100);
    return $calc_destilada;
}
 

/** Programa Principal */
/*int $b,$l*/
    echo "Ingrese cantidad de Betametasona: ";
    $b = trim(fgets(STDIN));
    echo "Ingrese cantidad de Loratadina: ";
    $l = trim(fgets(STDIN));

    $cant_n = calcAguaDestilada($b,$l);
    echo "La cantidad de agua necesaria es: " .$cant_n;