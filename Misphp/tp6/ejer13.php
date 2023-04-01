<?php 

    echo "Ingrese un numero entero mayor a cero: ";
    
    $n = trim(fgets(STDIN));
    $v1 = 1;
    $v2 = 0;
    if ($n > 0) {
        for($i=1; $i <= $n; $i++){ 
            $v3 = $v1 + $v2;
            $v1 = $v2;
            $v2 = $v3;
            
            echo $v3;
        }
    } else {
        echo "No se puede ejecutar";
    }
    

?>
