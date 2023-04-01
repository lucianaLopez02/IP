<?php 
 $concatenar = "";
do{
    echo "Ingrese palabra (. para finalizar):";
    $palabra = trim(fgets(STDIN));
    $concatenar=$palabra." ".$concatenar;

}while ($palabra <> ".");
echo $concatenar;
