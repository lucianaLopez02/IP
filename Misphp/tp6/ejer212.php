<?php 

$sumaPesos = 0;
$cantAlumnos = 0;
$menorEdad = 1000; //por que 1000
$mayorEdad = -1; // por que -1
echo "Desea ingresar un alumno? (s/n)";
$rta = trim(fgets(STDIN));

    while ($rta == "s") { // por que un while? y no do while
        echo "Ingrese año nacimiento: ";
        $anioNac = trim(fgets(STDIN));
        echo "Ingrese altura: ";
        $altura = trim(fgets(STDIN));
        echo "Ingrese peso: ";
        $peso = trim(fgets(STDIN));

        $cantAlumnos++;
        $sumaPesos = $sumaPesos + $peso;
        $edad = 2022 - $anioNac;

        if ($edad > $mayorEdad) {
            $mayorEdad = $edad; //selectora
            $mayorAltura = $altura;
        }

        if ($edad < $menorEdad) {
            $menorEdad = $edad; //selectora
            $menorPeso = $peso;
        }

        echo "Otro? (s/n) ";
        $rta = trim(fgets(STDIN));
    }

    $promedio = $sumaPesos / $cantAlumnos;
    echo "Altura y edad del alumno de mayor edad ".$mayorAltura.",".$mayorEdad."\n";
    echo "Peso y edad del alumno con menor edad" .$menorPeso.",".$menorEdad;

    echo "Promedio: ".$promedio;
?>
