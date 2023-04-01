<?php

$cantEncuestas = 0;
$contMenores = 0;
$ninosMax = -1;
$sumaCantCasa = 0;


echo "Cuantas encuestas quiere ingresar al programa?: ";
$cantEncuestas = trim(fgets(STDIN));


        for ($i=0; $i < $cantEncuestas ; $i++) {
            echo "\nIngrese nombre del jefe de hogar: ";
            $nomJefe = trim(fgets(STDIN));
            echo "Ingrese cantidad de habitantes que viven en la vivienda: ";
            $cantCasa = trim(fgets(STDIN));
            echo "Ingrese cantidad de niños menores a 18 años: ";
            $cantNinos = trim(fgets(STDIN));

            //Saber la cantidad d viviendas con ninos menores
            if ($cantNinos > 0) {
                $contMenores++;
            }

            if ($cantNinos > $ninosMax) {
                $ninosMax = $cantNinos;
                $jefeMax = $nomJefe;
            }

            $sumaCantCasa =  $sumaCantCasa + $cantCasa;
        }
        
    if ($cantEncuestas <= 0) {
            echo "No se puede realizar promedio";
     } else {
            $promedioTotal = $sumaCantCasa / $i;
            echo "\nLa cantidad de encuestas formuladas son: ".$i."\n";
            echo "La cantidad de viviendas que tienen menores de edad son: ".$contMenores."\n";
            echo "El nombre del jefe que tiene mayor cantidad de niños menores: ".$jefeMax."\n";
            echo "Promedio de la cantidad de personas por vivienda: ".$promedioTotal;
    }