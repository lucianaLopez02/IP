<?php 
    /* Calcular velocidad a partir de distancia km y tiempo hs */
    /* int $km, $hs float $velocidad*/

    echo "Ingrese distancia a recorrer en km: ";
    $km = trim(fgets(STDIN));
    echo "Ingrese Ingrese el tiempo en hs del recorrido: ";
    $hs = trim(fgets(STDIN));
    $velocidad = $km / $hs;
    echo "La velocidad en km/h es: ".$velocidad;
?>
