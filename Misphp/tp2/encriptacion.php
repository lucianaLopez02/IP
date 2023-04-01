<?php
 echo "Ingrese entero de cuatro digitos: ";
$num = trim(fgets(STDIN)); //1576

$cociente1 = $num/10; //157
$resto1 =  $num % 10; //6

$cociente2 = $cociente1/10; //15
$resto2 = $cociente1%10;//7

$cociente3 = $cociente2/10; //1  (($num/10)/10)/10)
$resto3 = $cociente2%10;//5

//fin primer paso

$suma1 = $resto1 + 7;//13
$suma2 = $resto2+ 7; //14
$suma3 = $resto3 + 7; //12
$suma4 = $cociente3 + 7; //8

//fin segundo paso

$resto_suma = $suma4 % 10; //8
$resto_suma1 = $suma3 % 10; //2
$resto_suma2= $suma2 % 10; //4
$resto_suma3 = $suma1 % 10;//3

//Intercambio de primera a tercera variable
$auxiliar = $resto_suma; // a = 8
$resto_suma = $resto_suma2; //8 = 4
$resto_suma2 = $auxiliar; // 4 = a

//Intercambio de segunda a cuarta variable
$auxiliar = $resto_suma1; // a = 2
$resto_suma1 = $resto_suma3; //2 = 3
$resto_suma3 = $auxiliar; // 3 = a

$numero_total = ($resto_suma*1000)+ ($resto_suma1*100)+($resto_suma2*10)+($resto_suma3*1); //Forma 1 juntado
echo "paso 3: " .$numero_total;

//fin tercer paso
//Intercambio variables






 ?>
