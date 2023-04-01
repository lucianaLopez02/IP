<?php
/** 
 *Calcular discriminante de una ecuación de segundo grado
 * @param int $coefA
 * @param int $coefB
 * @param int $coefC
 * @return int
*/
function calcularDiscriminante($coefA,$coefB,$coefC){
	//int discriminante
$discriminante = pow($coefB,2) - (4 * ($coefA) * ($coefC));
return($discriminante);
}

/*PROGRAMA PRINCIPAL calcularBhaskara*/
/*Calcular bhaskara y mostrar el resultado de las raíces dependiendo de si el determinante es mayor a cero, igual o menor */
/*int $esCoefA, $esCoefB, $esCoefC, $esDiscriminante, $x1, $x2*/
	echo "Ingrese coeficiente del término cuadrático: ";
	$esCoefA = trim(fgets(STDIN));
	echo "Ingrese coeficiente del término lineal: ";
	$esCoefB = trim(fgets(STDIN));
	echo "Ingrese coeficiente del término dependiente: ";
	$esCoefC = trim(fgets(STDIN));

	$esDiscriminante = calcularDiscriminante($esCoefA,$esCoefB,$esCoefC);
	echo $esDiscriminante;

	if($esDiscriminante > 0){
		$x1 = ((-$esCoefB) + sqrt($esDiscriminante)) / (2*$esCoefA);
		$x2 = ((-$esCoefB) - sqrt($esDiscriminante)) / (2*$esCoefA);
		echo "El resultado de la Raiz 1 es:  ".$x1. " y el resultado de la raiz 2 es: ".$x2;
	} elseif($esDiscriminante == 0) {
		$x1 = ((-$esCoefB) / (2*$esCoefA));
		
		echo "Las raíces son dobles y el resultado es:".$x1;
	} else{
		echo "No es posible calcular raíces reales";
	}