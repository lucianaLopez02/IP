<?php
/*encontrar perimetro,diametro,volumen y superfie de una radio*/
   echo "Ingrese radio: ";
   $radio = trim(fgets(STDIN));
   $PI = 3.1416;
   $diametro = 2 * $radio;
   $perimetro = $diametro * $PI;
   $superficiea = $PI * ($radio * $radio);
   $volumen=   (4/3)*$PI *($radio*$radio*$radio);
   $superficieb= 4 * $PI * ($radio * $radio);

   echo "El diametro para una circunferencia de radio R es: " .$diametro . "\n";
   echo "El perimetro para una circunferencia de radio R es: " .$perimetro. "\n";
   echo "El superficiea para una circunferencia de radio R es:  " .$superficiea. "\n";
   echo "El volumen para una circunferencia de radio R es: " .$volumen. "\n";
   echo "El superficieb para una circunferencia de radio R es: " .$superficieb. "\n";
 ?>
