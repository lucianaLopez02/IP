<?php 
    
    $respuesta = "s";
    $anioActual = 2022;
    $acumPeso = 0;
    $cont = 0;
    do {
        
        echo "Ingrese año de nacimiento del alumno:";
        $nacAlumno = trim(fgets(STDIN));
        echo "Ingrese altura del alumno: ";
        $alturaAlumno = trim(fgets(STDIN));
        echo "Ingrese peso del alumno: ";
        $pesoAlumno = trim(fgets(STDIN));

        $edadAlumno = $anioActual - $nacAlumno ;

        if ($edadAlumno >= 18) {
            echo "Altura alumno ".$cont.": ".$alturaAlumno."\n";
            echo "Edad del alumno ".$cont.": ".$edadAlumno."\n";
        }else{
            echo "Peso del alumno ".$cont.": ".$pesoAlumno."\n"; 
            echo "Edad del alumno ".$cont.": ".$edadAlumno."\n";
        }

        $cont++;
        $acumPeso =  $acumPeso + $pesoAlumno ;
        
       

        echo "¿Desea ingresar otros datos de un nuevo alumno? (s/n): ";
        $respuesta = trim(fgets(STDIN));
    } while ($respuesta == "s");

    
    $pesoPromedio = $acumPeso / $cont;
    echo "El peso promedio de todos los alumnos es: ".$pesoPromedio;
?>
