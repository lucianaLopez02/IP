<?php 
/**
 * funcion que convierte este horario del dia a segundos y retorna la cantidad de segundos 
 */
function convertirASegundos($hora,$min,$seg,$tipo){
    // int $cantSegundos,$hora, $horaAsegundos, $minutosAsegundos
    $cantSegundos = 0;
    if ($tipo == "AM" || $tipo == "am"){
        if($hora > 0 && $hora <= 12){
            if($min >= 0 && $min < 60){
                if($seg >= 0 && $seg < 60){
                $horaAsegundos = ($hora * 3600);
                $minutosAsegundos = ($min * 60);    
                $cantSegundos = ($horaAsegundos + $minutosAsegundos + $seg);
                }
            }
        }
    }elseif ($tipo == "PM" || $tipo == "pm"){
        if($hora >= 0 && $hora <= 12){
            if($min >= 0 && $min < 60){
                if($seg >= 0 && $seg < 60){
                    $hora = $hora + 12;
                    $horaAsegundos = ($hora * 3600);
                    $minutosAsegundos = ($min * 60);    
                    $cantSegundos = ($horaAsegundos + $minutosAsegundos + $seg);
                }
            }
        }
    }
    return $cantSegundos;
}
/*
$esCantSegundos = aSegundos(5,30,35,"am");

echo $esCantSegundos;
*/

/** 
*Calcular formato hora la cantidad de segundos
*@param int $cantidadSegundos
*
*/
function formatoHora($cantidadSegundos){ //6248
    $horaT = 0;
    $minutosT = 0;
    $segundosT = 0;

    $horaT = (int)($cantidadSegundos/3600); //1
    $minutosT = ($cantidadSegundos / 60) % 60; // 44
    $segundosT = $cantidadSegundos % 60;//8
    
    $mensajeFormato = $horaT."h:".$minutosT."m:".$segundosT."s";

    return ($mensajeFormato);
}
/*
$esFormato = formatoHora($esCantSegundos);
echo $esFormato;
*/


function esMenor($cantidadSegundos1,$cantidadSegundos2){
     $valor = False;
    if ($cantidadSegundos1> $cantidadSegundos2){
        $valor =  True;
    }
    return ($valor);
}


/*$seraMenor = esMenor(6248,4563);
echo $seraMenor;
*/

function difHoras($cantSegundos1,$cantSegundos2){
    $valor  = esMenor($cantSegundos1,$cantSegundos2);
    if ($valor) {
        $horaD = ($cantSegundos1) - ($cantSegundos2);
    }else{
        $horaD = ($cantSegundos2) - ($cantSegundos1);
    }
    
    $horarioF = formatoHora($horaD);

    $diferencia = "La diferencia es: ".$horarioF ;
    return($diferencia);
}


//Programa Principal
    echo "Ingrese horas(0 a 12): ";
    $h = trim(fgets(STDIN));
    echo "Ingrese minutos(0 a 59): ";
    $m = trim(fgets(STDIN));
    echo "Ingrese segundos(0 a 59): ";
    $s = trim(fgets(STDIN));
    echo "Ingrese tipo(AM a PM): ";
    $t = trim(fgets(STDIN));
    
    echo "\nIngrese horas(0 a 12): ";
    $h2 = trim(fgets(STDIN));
    echo "Ingrese minutos(0 a 59): ";
    $m2 = trim(fgets(STDIN));
    echo "Ingrese segundos(0 a 59): ";
    $s2 = trim(fgets(STDIN));
    echo "Ingrese tipo(AM a PM): ";
    $t2 = trim(fgets(STDIN));

     $convertirHorarioAsegundos = convertirASegundos($h,$m,$s,$t);
     $convertirHorario2Asegundos = convertirASegundos($h2,$m2,$s2,$t2);

     $convertirAformato = formatoHora($convertirHorarioAsegundos);
     $convertirAformato2 = formatoHora($convertirHorario2Asegundos);

     $determinarMenor = esMenor($convertirHorarioAsegundos, $convertirHorario2Asegundos);

     if($determinarMenor){
            echo "\nLas horas ordenadas de mayor a menor son: \n";
            echo $convertirAformato." son ".$convertirHorarioAsegundos." seg.\n";
            echo $convertirAformato2." son ".$convertirHorario2Asegundos." seg.\n";
            $cartelDiferencia = difHoras($convertirHorarioAsegundos,$convertirHorario2Asegundos);
     }else{
            echo "\nLas horas ordenadas de mayor a menor son: \n";
            echo $convertirAformato2." son ".$convertirHorario2Asegundos." seg.\n";
            echo $convertirAformato." son ".$convertirHorarioAsegundos." seg.\n";
            $cartelDiferencia = difHoras($convertirHorarioAsegundos,$convertirHorario2Asegundos);
     }
     
     echo $cartelDiferencia;
    