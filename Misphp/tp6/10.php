<?php 
/*
  echo "Ingrese un numero N: ";
  $nro = trim(fgets(STDIN));

  $suma = 0;
    for ($i=1; $i < $nro+1; $i++) { 
        //echo $i."-";
        $suma = $suma + $i;
       
    }
    echo $suma;
*/


echo "Ingrese un numero N: ";
$nro = trim(fgets(STDIN));
$acumSuma = 0;
$impar = 1;
for ($i=1; $i < $nro+1; $i++) { 
    echo $impar."\n";
    $acumSuma =  $acumSuma + $impar;
    $impar = $impar + 2;
    
}
echo "Para N: ".$nro." La sumatoria es: ".$acumSuma;
?>