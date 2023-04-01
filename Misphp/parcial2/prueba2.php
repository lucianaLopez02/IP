<?php 
function sumaFiltrada($centinela){
    $suma = 0;
    $numAnterior = 0;
    echo "Ingrese un numero: ";
    $numero = trim(fgets(STDIN));

    while ($numero <> $centinela) {
        if ($numAnterior < $numero) {
            $suma = $suma + $numero;
        }

        $numAnterior = $numero;
        echo "Ingrese un numero: ";
        $numero = trim(fgets(STDIN));
    }

    return $suma;
}

$r = sumaFiltrada(0);
echo $r;
?>

