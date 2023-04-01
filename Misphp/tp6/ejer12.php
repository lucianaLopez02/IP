<?php 
    echo "Ingrese un numero N: ";
    $n = trim(fgets(STDIN));
 
    
    //$c = 0; $g = 0;

    $denominador = 1;
    $b = 1;
    $numerador = 1;
    $f = 2;
    $AcumSuma = 0;

        
    if ($n > 0) {  
    for ($i=1; $i < $n+1; $i++) { 
        $c = $denominador + $b;
        $denominador = $b;
        $b = $c;


        $g = $numerador + $f;
        $numerador = $f;
        $f = $g;


        $division = $numerador / $denominador;
        $AcumSuma = $AcumSuma + $division;
        }
        echo "El resultado es: ".$AcumSuma;
    } else {
    echo "No se puede ejecutar";
    }

   
    
    
    
    
    
    
    
    /*    $numerador = ;
        $denominador = ;
    
        $division = $numerador / $denominador;
        $suma = $suma + $division;
    
    echo "El resultado es: ".$suma;

?>*/
