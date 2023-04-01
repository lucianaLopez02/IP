<?php

/**
 * Calcular la sumatoria de un numersos impares naturales que hay entre ellos
 * @param Integer $NroMin
 * @param Integer $NroMax
 * @return Integer
 */
function sumarImpares($nroMin,$nroMax){  
    // Integer $acumSuma, $aux
    $acumSuma = 0;
    if ($nroMin > $nroMax) {
        $aux =  $nroMin;
        $nroMin = $nroMax;
        $nroMax = $aux;
    }

    if ($nroMin % 2 <> 0) {
        $nroMin++;
    }
    
    for ($i=$nroMin + 1; $i < $nroMax; $i=$i+2) { 
        if ($i % 2 <> 0) { 
            $acumSuma = $acumSuma + $i;
        }    
     }
 return $acumSuma;
}

/* Programa SumatoriaNrosImpar */
/* Intereg $nroMax,$nroMin,$resultado */
    echo "Nro minimo: ";
    $num = trim(fgets(STDIN));
    echo "Nro maximo: ";
    $num2 = trim(fgets(STDIN));

    $resultado = sumarImpares($num,$num2);
    echo "La suma es: ".$resultado;





    //$resultado = sumaNroImpar($nroMin,$nroMax);
    /*echo "Nro minimo: ";
$nroMin = trim(fgets(STDIN));
echo "Nro maximo: ";
$nroMax = trim(fgets(STDIN));
*/