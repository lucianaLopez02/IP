
<?php
echo "string";
php
/**verificar si el numero es multiplo de 2
 *@param int $numero
 *@return boolean multiplo
*/

function esMultiploDe2 ($numero){
    //boolean multiplo
     $multiplo = ($numero % 2) == 0;
    return ($multiplo);
}

//Programa Principal
/* Algoritmo para pedir un numero entero y verificar el modulo esMultiploDe2 */
/*int $n*/
echo "Ingrese un numero: ";
$n = trim(fgets(STDIN));
$cartel = esMultiploDe2($n);
echo $cartel."\n";
