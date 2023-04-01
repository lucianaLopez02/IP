<?php 
/**
 * Calcular el valor del factor dado el mes
 * @param string $nombreMes 
 * @return int
 */

function calculaFactor ($nombreMes){
    $valorFactor = 0;
    if($nombreMes == "enero" || $nombreMes == "febrero" || $nombreMes == "marzo"){
        $valorFactor = 15;
    }elseif($nombreMes == "abril" || $nombreMes =="mayo" || $nombreMes == "junio" ){
        $valorFactor = 17;
    }elseif($nombreMes == "julio" || $nombreMes == "agosto"){
        $valorFactor = 19;
    }elseif($nombreMes == "septiembre" || $nombreMes == "octubre" || $nombreMes == "noviembre"){
        $valorFactor = 20;
    }elseif($nombreMes == "noviembre"){
        $valorFactor = 21;
    }
    return($valorFactor);
}
/* Programa Principal calcularProductividad */
echo "Ingrese mes: ";
$mes = trim(fgets(STDIN));
echo "Ingrese productos producidos en el mes: ";
$cantidadArticulos = trim(fgets(STDIN));
$esValorFactor =  calculaFactor($mes);
$productividad = $cantidadArticulos * $esValorFactor;

echo "El el mes de ".$mes." se produjeron ".$cantidadArticulos." articulos, por lo tanto la productividad es: ".$productividad;
