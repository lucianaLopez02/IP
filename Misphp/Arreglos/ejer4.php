<?php 
/**
 * retornar un arreglo multidimensional donde muestre los datos de una mascota cargada
 * @return array
 */
function cargarMascotas(){

    $misMascostas = [];
    
    $misMascostas[0] = [
        "nombre" => "Gonzo",
        "edad" => 9,
        "tipo" => "perro",
    ];
    
    $misMascostas[1] = [
        "nombre" => "Peggy",
        "edad" => 3,
        "tipo" => "puerco",
    ];
    
    $misMascostas[2] = [
        "nombre" => "Harry",
        "edad" => 4,
        "tipo" => "hamster",
    ];
    return $misMascostas;
    }


    /**
     * mostrar por pantalla (nombre,edad y tipo) de la mascota
     * @param array $arregloMascotas
     */
    function mostrarDatosMascota($unArregloMascotas){
        foreach ($unArregloMascotas as $key => $value) {
            echo "Mascota " .($key+1). ": ".$value["nombre"]." es ".$value["tipo"]." de ".$value["edad"]." años. \n";
        }
    }

    /**
     * devolver -1 si no existe una mascota menor a la edad ingresada, sino retornar la primer mascota que cumpla con la condicion
     * @param array $arregloMascota
     * @param int $edadMenorMascota
     * @return int
     */
    function buscarPrimerMenorA($unArregloMascotas, $edadMascota){
        $n =  count($unArregloMascotas); //cantidad mascotas
        $i = 0;
        $valor = -1;
        // recorrer el arreglo mascotas hasta encontrar 
        while ($i < $n && $valor == -1) { //la condicion de corte es cuando se encuentre la priemra mascota
            if  ($unArregloMascotas[$i]["edad"] < $edadMascota) {
                $valor = $i+1; //posicion de la mascota
            }
            $i++;
        }
        return $valor;
    }

    //Programa Principal datosMascota
    $arregloMascotas = cargarMascotas();
    mostrarDatosMascota($arregloMascotas);
    echo "Ingrese una edad de mascota para comparar: ";
    $mascotaMenor = trim(fgets(STDIN));

    $esMenorMascota = buscarPrimerMenorA($arregloMascotas, $mascotaMenor);
    if ($esMenorMascota <> -1) {
        echo "La mascota con menor edad es: MASCOTA $esMenorMascota";
        
     }else{
        echo "No existe mascota menor a la edad ingresada";
    }
       
    

    
