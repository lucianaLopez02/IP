<?php 

/**verificar si el numero es multiplo de 2 
 *@param int $numero
 *@return boolean multiplo
*/

function esMultiploDe2 ($numero){
    //boolean multiplo 
    $multiplo = ($numero % 2) == 0;
    return $multiplo;
}

//programa principal
/* Algoritmo para pedir dos numeros enteros y verificar si es multiplo de 2 */
/*int $n,$n2*/
/*float $multiplo, $multiplo2*/
/*string $mensaje, $mensaje2 */
echo "Ingrese un numero: ";
$n = trim(fgets(STDIN)); //ingreso de un número

echo "Ingrese otro numero: ";
$n2 = trim(fgets(STDIN)); //ingreso de otro número

$multiplo= esMultiploDe2($n);//123 = 0 = false
$multiplo2= esMultiploDe2($n2); //90 = 1  = true

$mensaje = $multiplo ? "El numero " .$n. " es multiplo de 2" : "El numero " .$n. " no es multiplo de 2";
$mensaje2 = $multiplo2 ? "El numero " .$n2. " es multiplo de 2" : "El numero " .$n2. " no es multiplo de 2";

echo $mensaje."\n";
echo $mensaje2."\n";
