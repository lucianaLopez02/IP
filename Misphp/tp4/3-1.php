<?php 
/* Algoritmo para pedir dos numeros enteros y resuelva el calculo MN
+ √ | M |*/
/*int $m,$n float $valor_absoluto, $exponente,$raiz_cuadrada, $calculo */
echo "Ingrese numero m: ";
$m = trim(fgets(STDIN));
echo "Ingrese numero n: ";
$n = trim(fgets(STDIN));

$valor_absoluto = abs($m);
$exponente = pow($valor_absoluto,$n);
$raiz_cuadrada = sqrt($valor_absoluto);

$calculo = $exponente + $raiz_cuadrada;
echo "el resultado es: " .$calculo;

?>
