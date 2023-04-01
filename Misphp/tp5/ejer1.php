<?php 
/**
 * Calcular si un numero es par de 2
 * @param int num
 * @return boolean
 */
function esPar($num){
    //Boolean $par
    $par = ($num % 2) == 0;
    if ($par){
        $valor = True;
    }else{
        $valor = False;
    }
    return($valor);
} 
/*$resultado = esPar(1);
echo $resultado."\n";¨*/

/*Programa Principal esNumeroPar*/
/* int $numero, boolean $numeroPar*/
echo "Ingrese un numero: ";
$numero = trim(fgets(STDIN));

$numeroPar = esPar($numero);

if ($numeroPar){
    echo "El nro ".$numero." es: par";
}else{
    echo "El nro ".$numero." es: impar";
}


?>
