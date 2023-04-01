<?php 

    echo "Ingrese un numero para evaluar sus multiplos: ";
    $n = trim(fgets(STDIN));

        $opcion  = "s";
        $cont = 0;
        $contMultiplo = 0;
       
        while ($opcion == "s") {
            echo "¿Desea ingresar un numero de la secuencia?(s/n): ";
            $opcion = trim(fgets(STDIN));

            if ($opcion == "s") {
                echo "Numero de la Secuencia: ";
                $numSecuencia = trim(fgets(STDIN));
                $cont++;
                
                if ($numSecuencia % $n == 0) {
                    $contMultiplo++;
                    echo $contMultiplo;
                }
            }else{
                $opcion = "n";
            }
        }

    if ($cont == 0) {
        echo "No se ingresaron nros en la secuencia";
    }else{
        $porcentaje =  ($contMultiplo * 100) / $cont;
        echo "El porcentaje de multiplos es:%".$porcentaje;
        
    }
    
    
?>
