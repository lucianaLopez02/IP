<?php 
/**
 * dados un nombre, finicio, valor entrada, cant payasos ingresados por el usuario convertir a un arreglo asociativo
 */
function leerDatosCirco(){
    $arregloAsociativo = [];

    echo "Ingrese nombre: ";
    $nombre = trim(fgets(STDIN));

    echo "Ingrese finicio: ";
    $finicio = trim(fgets(STDIN));

    echo "Ingrese valor de la entrada: ";
    $valorEntrada = trim(fgets(STDIN));

    echo "Ingrese cant. payasos: ";
    $cantPayasos = trim(fgets(STDIN));

    $arregloAsociativo["nombre"] = $nombre;
    $arregloAsociativo["finicio"] = $finicio;
    $arregloAsociativo["valorEntrada"] = $valorEntrada;
    $arregloAsociativo["cantPayasos"] = $cantPayasos;

    return $arregloAsociativo;
}

//Programa Principal mostrarDatosCirco
    $arreglo = leerDatosCirco();
    print_r($arreglo);
    //o
    //print_r(leerDatosCirco());
?>
