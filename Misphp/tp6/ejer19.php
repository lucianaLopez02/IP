<?php 
 echo "¿Cuantas palabras desea ingresar? ";
 $cantPalabras = trim(fgets(STDIN));
 
 $cont = 0;
 while ($cont < $cantPalabras) {
    echo "Ingrese palabra: ";
    $palabra = trim(fgets(STDIN));
    $cont++;
    echo "Su palabra número ".$cont.": " .$palabra."\n";
 }
    
?>
