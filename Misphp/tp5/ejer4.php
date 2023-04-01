<?php 
/* Programa Principal esCapicua */
/* int $numero*/
echo "Ingrese un numero de tres cifras: ";
$numero = trim(fgets(STDIN));

if($numero >100 && $numero <1000){ //659
    
    $tercerDigito =  $numero % 10; // 4
    $segundoDigito = (($numero % 100) - $tercerDigito) / 10;//7
    $primerDigito =  ($numero - ($segundoDigito * 10) - $tercerDigito)/ 100;//8


    if ($primerDigito == $tercerDigito) {
        echo $numero." es capicua";
    } else {
        echo $numero." NO es capicua";
    }
    
}else{
    echo "error debe ser un numero de tres digitos";
}
?>
