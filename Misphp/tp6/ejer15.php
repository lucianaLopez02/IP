<?php 

    echo "Ingrese el numero a encontrar: ";
    $numBuscado = trim(fgets(STDIN));
    
    do{
        echo "Ingrese Numero para la Secuencia: ";
        $numSecuencia = trim(fgets(STDIN));

        if ($numSecuencia == -1) {
            echo "numero no encontrado \n";
        }elseif($numSecuencia == $numBuscado){
            echo "numero encontrado \n";
            //$numSecuencia = -1;
        }
        
    }while ($numSecuencia <> -1 && $numSecuencia <> $numBuscado );

    
        

