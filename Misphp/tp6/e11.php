<?php 
echo "Ingrese un numero N: ";
$nro = trim(fgets(STDIN));
$acumSuma = 0;
$impar = 1;
for ($i=0; $i < $nro; $i++) { 
    $acumSuma =  $acumSuma + $impar;
    $impar = $impar + 2;
    echo $impar;
}
echo "Para N: ".$nro." La sumatoria es: ".$acumSuma;
?>