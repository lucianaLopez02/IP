<?php
echo "Ingrese numero encriptado de cuatro digitos: ";
$num = trim(fgets(STDIN)); //4382

//paso 1 de desencriptacion

$cociente1 = $num/10; //438
$resto1 =  $num % 10; //2

$cociente2 = $cociente1/10; //43
$resto2 = $cociente1%10;//8

$cociente3 = $cociente2/10; //4
$resto3 = $cociente2%10;//3

$resto4 = $cociente3%10;//4

echo "paso 2: " .$resto1.$resto2.$resto3.$resto4."\n";

 //paso 2
 $suma1 = (($resto4 + 10) - 7 )% 10;// 7
 $suma2 =  (($resto3 + 10) - 7 )% 10;// 6
 $suma3 = (($resto2 + 10) - 7) % 10;// 1
 $suma4 = (($resto1 + 10) - 7 )% 10;// 5

echo "paso 2: " .$suma1.$suma2.$suma3.$suma4."\n";
//paso3 - Intercambio variables

//Intercambio de tercera a primera
$auxiliar = $suma3; // a = 1
$suma3 = $suma1; //1 = 7
$suma1 = $auxiliar; //  7 = a

//Intercambio de cuarta a segunda variable
$auxiliar = $suma4; // a = 5
$suma4 = $suma2; //5 = 6
$suma2 = $auxiliar; // 6 = a


 //paso 4 devolver valores
 $numero_total = ($suma1*1000)+ ($suma2*100)+($suma3*10)+($suma4*1); //Forma 1 juntado
echo "paso 4 : " .$numero_total;

//fin cuarto paso





//echo "paso 4: " .$suma3.$suma4.$suma1.$suma2 
