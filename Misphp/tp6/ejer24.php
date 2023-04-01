<?php 
/**
 * Realizar una piramide simple 
 */
function determinarPrimeraPiramide($nro){
    for ($i=1 ; $i <= $nro; $i++) { 
        for($j=1; $j <= $i ; $j++){ 
            echo $j; 
        }
        echo "\n";
        }
}

/**
 * Realizar una piramide decrementada al reves
 */
function determinarsegundaPiramide($nro){
    for ($i=$nro ; $i > 0; $i--) { 
        for($j= 1; $j <= $i ; $j++){ 
            echo $i; 
        }
        echo "\n";
        }
}

/**
 * Realizar una piramide repetida al reves
 */
function determinarTercerPiramide($nro){
    for ($i=1 ; $i <= $nro; $i++) { 
        for($j=$i; $j <= $nro ; $j++){ 
            echo $i; 
        }
        echo "\n";
        }
}
//Programa Principal GenerarPiramides

    echo "Quiere pedir una piramide?(s/n): ";
    $rta =  trim(fgets(STDIN));

    while ($rta == "s") {

        echo "Cual opcion quiere elegir?(1-2-3): ";
        $opcion = trim(fgets(STDIN));
            if ($opcion == 1 || $opcion == 2 || $opcion == 3) {
                echo "Ingrese cantidad de filas: ";
                $filas = trim(fgets(STDIN)); 
                if ($opcion == 1) {
                    determinarPrimeraPiramide($filas);
                }elseif ($opcion == 2) {
                    determinarsegundaPiramide($filas);
                }elseif ($opcion == 3) {
                    determinarTercerPiramide($filas);
                }
            }else{
                echo "No es un opcion\n";
            }
        echo "Desea otra piramide(s/n) ";
        $rta =  trim(fgets(STDIN));
    }
?>
