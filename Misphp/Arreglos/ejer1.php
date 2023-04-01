<?php 
    /**
     * Dado una cantidad n de temperaturas, retornar un arreglo indexado
     * @param int $n
     * @return array
     */
    function leerTemperaturas ($cantTemperaturas){
        // Float $temperaturas
        $temperaturas = []; //Inicializacion del arreglo $temperaturas
        
        for ($i=0; $i < $cantTemperaturas; $i++) { 
            echo "Ingrese temperatura: ";
            $temperaturas[$i]= trim(fgets(STDIN));
        }
        //print_r($temperaturas);
        return $temperaturas;
    }
   
    
        $arregloTemperaturas = leerTemperaturas(3); //Invocacion al módulo leerTemperaturas
       // echo $arregloTemperaturas;

        
    /**
     * Dado un arreglo o lista de temperaturas, mostrar por pantalla cada temperaturas
     * @param array $arregloTemperaturas
     */
    function listarTemperaturas($arregloTemperaturas){
        //String $resultadoLista

        $n = count($arregloTemperaturas);
        //con Para
        for ($i=0; $i < $n; $i++){ 
            echo "El valor de la temperatura ".($i+1)." es ".$arregloTemperaturas[$i]."\n";
        }

    }

    listarTemperaturas($arregloTemperaturas);
    
    /**
     * retorne el promedio de las temperaturas
     * @param array $arregloTemperaturas
     * @return float
     */
     function promTemperaturas($arregloTemperaturas){
        //Float $promedio
        $acumSuma = 0;
        $n = count($arregloTemperaturas); //ccantidad de temperaturas

        for ($i=0; $i < $n; $i++) { 
            $acumSuma = $acumSuma + $arregloTemperaturas[$i];
        }
        
        $promedio = ($acumSuma / $n);
        return $promedio;
     }


        $promedio = promTemperaturas($arregloTemperaturas);
        echo "promedio: ".$promedio;
     /**
      * Dado un arreglo de temperaturas y una temperatura determinada, obtener el porcentaje de temperaturas 
      */
     function porcTemperaturasSuperiores($arregloTemperaturas, $temperaturaDeterminada){
        $cantTemperaturas = 0;
        $n = count($arregloTemperaturas);

        for ($i=0; $i < $n; $i++) { 
            if ($arregloTemperaturas[$i] > $temperaturaDeterminada) {
                $cantTemperaturas++;
            }
        }
        $porcentaje = $cantTemperaturas * 100 / $n;
        return $porcentaje;
     }
        $porcentaje = porcTemperaturasSuperiores($arregloTemperaturas, 17.8);
        
        echo "\nporcentaje: ".$porcentaje;

    /**
     * dada una coleccion de temperaturas retornar el indice donde se encuentra la menor temperatura
     * @param $coleccionTemperaturas
     * @return $indiceMenorTemperatura
     */
    function minTemperatura($arregloTemperaturas){
        $n = count($arregloTemperaturas);
        $menorTemperatura = 99999999999;

        for ($i=0; $i < $n; $i++) { 
            if ($arregloTemperaturas[$i] < $menorTemperatura) {
                $menorTemperatura = $arregloTemperaturas[$i]; 
                $posicionMenor = $i;
            }
        }
        
        return $posicionMenor;
    }
     //minTemperatura($arregloTemperaturas);
    $minTemp = minTemperatura($arregloTemperaturas); //se refiere a la posicion o al valor?
    echo "\nposicion de la min temp: ".$minTemp;


    /**
     * dada una coleccion de temperaturas retornar el indice donde se encuentra la mayor temperatura
     * @param $coleccionTemperaturas
     * @return $indiceMenorTemperatura
     */
    function maxTemperatura($arregloTemperaturas){
        $n = count($arregloTemperaturas);
        $mayorTemperatura = -1;

        for ($i=0; $i < $n; $i++) { 
            if ($arregloTemperaturas[$i] > $mayorTemperatura) {
                $mayorTemperatura = $arregloTemperaturas[$i]; 
                $posicionMayor = $i;
            }
        }
        
        return $posicionMayor;
    }

    $maxTemp = maxTemperatura($arregloTemperaturas); //se refiere a la posicion o al valor?
    echo "\nposicion de la max temp: ".$maxTemp;

    function extremosTemperaturas($arregloTemperaturas){
        

        $arregloAsociativo["min"] = minTemperatura($arregloTemperaturas);
        $arregloAsociativo["max"] = maxTemperatura($arregloTemperaturas);

        //return $arregloAsociativo;
        return print_r($arregloAsociativo);
    }
    extremosTemperaturas($arregloTemperaturas)
?>

