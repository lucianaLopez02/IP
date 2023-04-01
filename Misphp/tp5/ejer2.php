<?php 
/**
 * Determinar si el primer numero es mayor que el segundo
 * @param int num1 
 * @param int num2
 * @return boolean
 */
function esMayor ($num1,$num2){
    // Boolean $mayor 
    $mayor = ($num1 > $num2);
    if ($mayor) {
        $valor = True;
    }else{
        $valor = False;
    }
    return ($valor);
}

$resultado = esMayor(1,10);
echo $resultado."\n";
?>
