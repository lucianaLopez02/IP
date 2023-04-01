<?php 
 $contador = 0;
do{
    echo "Ingrese letra (- para finalizar):";
    $letra = trim(fgets(STDIN));
    if ($letra == "a"||$letra == "e" || $letra == "i" ||$letra == "o" || $letra == "u") {
        $contador=$contador + 1;
    }
}while ($letra <> "-");
echo "Cant. de vocales: ".$contador;
