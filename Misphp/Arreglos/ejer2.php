<?php 
$celulares = [];
$valor = [];
$celulares = ["Moto G6", "Samsung J7", "LG K9", "IPhone SE","Galaxy A9"];
$valor = [22030.90, 10500.00, 27999.00,38105.00,17000.80];

/**
 * suma todos los datos del arreglo $valor
 * @param array $arregloValores
 * @return float
 */
function sumatoriaValores($arregloValores){
    $suma = 0;
    $n =  count($arregloValores);
    for ($i=0; $i < $n; $i++) { 
        $suma = $suma + $arregloValores[$i];
    }
    return $suma;
}
 //Programa Principal caluclarMontoCelulares
        echo "Ingrese el numero de celular a imprimir (0 a 4): ";
        $nro = trim(fgets(STDIN));
        $n = count($celulares);
        if ($nro>=0 && $nro < $n ){
            echo "nombre celular es: ".$celulares[$nro]." y su valor es: ".$valor[$nro];
            $montoTotalCelulares = sumatoriaValores($valor);
            echo "\nEl costo total de los celulares es: ".$montoTotalCelulares;
        }
        else{
            echo "El numero no esta en la lista";
        }
            
        

