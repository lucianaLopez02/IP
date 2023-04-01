<?php 

/**
 * Calcular el orden inverso de un numero
 * @param Int $nro
 * @return Int
 */
function invertirNumero ($nro){
    // Intereg $nroInvertido
    $nroInvertido = 0;
            while ($nro <> 0) {
                 $digito = $nro % 10; //5
                 $nro = (int)($nro / 10); //1234
                 $nroInvertido = $nroInvertido * 10 + $digito; // 0*10+5
            }
        return($nroInvertido);
    }

/**
 * realizar las sumas sucesivas de dígitos hasta obtener un número menor a 10.
 * @param Int $nro
 * @return Int $sumaDigitos
 */
function sumarDigitos ($nro){
    // Intereg $sumaDigitos
        $sumaDigitos = 0;
        $aux=$nro; 
        $aux2=$nro; 
        while($aux2>=10){
            $aux=$aux2; 
            $sumaDigitos=0;
            while ($aux != 0) { 
                  $digito = $aux % 10; 
                  $aux = (int)($aux / 10); 
                  $sumaDigitos = $sumaDigitos + $digito;
            }
          $aux2=$sumaDigitos; 
        }
        return($aux2);
    }

    /**
     * Calcular la cantidad de divisores de un numero entero
     */
    function calcularCantDivisiores ($nro){
    // Intereg $sumatoriaDigitos
    $cantidadDivisores = 0;
        
        for ($i=1; $i < $nro ; $i++){ 
            if ($nro % $i == 0) {
                $cantidadDivisores++;
            }
            
        }
        return($cantidadDivisores);
    }

    function determinarPrimo ($nro){
        // Intereg $sumatoriaDigitos
        //$esPrimo = false;
        $contarPrimo = 0;
        for ($i=1; $i <= $nro ; $i++){ 
            if ($nro % $i == 0) {
                $contarPrimo++;
            }
        }
            if ($contarPrimo == 2) {
                $esPrimo =  true;
            } else {
                $esPrimo =  false;
            }
            
            return($esPrimo);
        }
    
    //Programa MenuDeOpciones
    //

    do {
            echo "\n\n1- Número inverso \n2- Suma de dígitos \n3- Cantidad de divisiores \n4- Es primo? \n5- Salir\n";
            echo "Opcion >>>: ";
            $opcion = trim(fgets(STDIN));

        if ($opcion == 1) {
            echo "Ingrese un nro para determinar su inverso: ";
            $n = trim(fgets(STDIN));
            $respuestaInverso = invertirNumero($n);
            echo "El numero invertido es: " .$respuestaInverso;

        }elseif ($opcion == 2) {
            echo "Ingrese un nro para determinar la suma de los digitos ";
            $n = trim(fgets(STDIN));
            $respuestaSuma = sumarDigitos($n);
            echo "La suma de los digitos es: ".$respuestaSuma;

        }elseif($opcion == 3){
            echo "Ingrese un nro para determinar la cantidad de divisores del numero: ";
            $n = trim(fgets(STDIN));
            $respuestaDivisiores = calcularCantDivisiores($n);
            echo "La cantidad de divisores del numero es: ".$respuestaDivisores;

        }elseif($opcion == 4){
            echo "Ingrese un nro para determinar si es primo: ";
            $n = trim(fgets(STDIN));
            $respuestaPrimo = determinarPrimo($n);
            if ($respuestaPrimo) {
                echo $n." es primo";
            } else {
                echo $n." no es primo";
            }
            
            
        }
        
    } while ($opcion <> 5);
        

        
?>
