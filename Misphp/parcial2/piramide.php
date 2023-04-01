<?php 

function dibujo ($num){
    //Intereg $i,$j,$blancos,$asteriscos
    for ($i=1; $i <= $num ; $i++) { 
        $blancos = $num - $i;

        for ($j=1; $j <= $blancos ; $j++) { 
            echo "__ ";
        }

        $asteriscos = $i;

        for ($j=1; $j <= $asteriscos ; $j++) { 
            echo " * ";
        }
        echo "\n";
    }
    echo "FIN";
}
   dibujo(0);
?>
