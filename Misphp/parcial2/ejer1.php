<?php 
// Programa Principal DterminarAdmision
// STRING $nombreCandidato, $rta, $nombreMayor
/* ENTERO $edadCandidato, $puntajeObtenido, $cont, $acumSuma,
$mayorPuntaje, $contPuntaje1, $contPuntaje2, $contPuntaje3, $edadMayor, $mayorPuntaje*/
// FLOAT $promedioEdad 

    $rta = "s";
    $cont = 0;
    $acumSuma = 0;
    $mayorPuntaje = -1; // o = en la condicional
    $contPuntaje1 = 0;
    //$edadMayor=-1
    $contPuntaje2 = 0;
    $contPuntaje3 = 0;
    do {
        echo "Ingrese nombre del candidato: ";
        $nombreCandidato = trim(fgets(STDIN));
        echo "Ingrese edad del candidato: ";
        $edadCandidato = trim(fgets(STDIN));
        echo "Ingrese puntaje del candidato: ";
        $puntajeObtenido = trim(fgets(STDIN));
        
        //Promedio edades

        $acumSuma = ($acumSuma + $edadCandidato);
        $cont++;

        //Nombre y edad del candidato de mayor puntaje
        if ($puntajeObtenido > $mayorPuntaje) {
            $nombreMayor = $nombreCandidato;
            $edadMayor = $edadCandidato;
            $mayorPuntaje = $puntajeObtenido;
        }
        /* SI (puntaje > puntajeMayor) ENTONCES
            nombreMayor = $nombreCandidato
            edadMayor = $edadCandidato
            puntajeMayor = puntajeObtenido
        FINSI*/


        //Segun el puntaje obtenido, contar cuantos candidatos aprobaron 
        if ($puntajeObtenido >= 74 && $puntajeObtenido <= 80 ) {
            $contPuntaje1++;
        }elseif ($puntajeObtenido >= 81 && $puntajeObtenido <= 90) {
            $contPuntaje2++;
        }elseif ($puntajeObtenido >= 91 && $puntajeObtenido <= 100) {
            $contPuntaje3++;
        }
        

        echo "Desea ingresar otro candidato (s/n): ";
        $rta = trim(fgets(STDIN));
    } while ($rta == "s");

    $promedioEdad = (int)($acumSuma / $cont); // lo va a a calcular todo el tiempo y no va a dar un valor real
    echo "\nEl promedio de las edades es: ".$promedioEdad;
    echo "El nombre y la edad de quien obtuvo el mayor puntaje: ".$nombreMayor."  ".$edadMayor."\n";
    echo "La cantidad de candidatos que aprobaron con un puntaje entre 91 y 100 puntos son: ".$contPuntaje3."\n";
    echo "La cantidad de candidatos que aprobaron con un puntaje entre 81 y 90 puntos son: ".$contPuntaje2."\n";
    echo "La cantidad de candidatos que aprobaron con un puntaje entre 74 y 80 puntos son: ".$contPuntaje1."\n";
    


?>
