<?php 
/*Programa CalcularFactorial*/
/*Integer $nroFactorial, $acumProducto,$i */
    echo "Ingrese un numero para obtener el factorial: ";
    $nroFactorial = trim(fgets(STDIN));
    $acumProducto = 1;
    for ($i=1; $i <= $nroFactorial ; $i++) { 
        echo $i;
        $acumProducto =  $acumProducto * $i;
    }
    echo "El factorial es: ".$acumProducto;
?>
