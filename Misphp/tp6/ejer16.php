<?php 
 $concatenar ="";
do{
    echo "Ingrese palabra (. para finalizar):";
    $palabra = trim(fgets(STDIN));
    $concatenar=$concatenar." ".$palabra;

}while ($palabra <> ".");
echo $concatenar;
