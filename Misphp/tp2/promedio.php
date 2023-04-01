<?php
  /* Realizar un promedio de tres notas*/
  /* INT $nota1 ,*/
    echo "Ingrese su primera nota: ";
    $nota = trim(fgets(STDIN));

     echo "Ingrese su segunda nota: ";
     $nota2 = trim(fgets(STDIN));

     echo "Ingrese su segunda nota: ";
     $nota3 = trim(fgets(STDIN));

     $promedio = ($nota +  $nota2 +  $nota3) / 3;

     echo "El promedio de las tres notas son: " .$promedio;
    

 ?>
