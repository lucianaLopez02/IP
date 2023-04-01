<?php 


/** modulo que recibe dos num y saber si es multiplo del otro */
function esMultiplo($n,$n2){
    //boolean $multiplo
    $multiplo = ($n % $n2) == 0;
    return $multiplo;
}


 $resultado = esMultiplo(42,6);
 $mensaje = $resultado? "true el primer parámetro es múltiplo del segundo parámetro":"false";
 echo $mensaje;