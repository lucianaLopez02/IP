<?php 
/**
 * Determinar si dos numeros son multiplos
 * @param int $num
 * @param int $num2
 * @return boolean
 */
function esMultiplo($num,$num2){
    //Boolean $multiplo
    $multiplo = ($num % $num2) == 0;
    if ($multiplo) {
        $valor = true;
    } else {
        $valor = false;
    }
    return($valor);
}

$resultado = esMultiplo(28,7);
echo $resultado."\n";