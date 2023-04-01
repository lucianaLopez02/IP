<?php 

    /**
     * Calcular la suma filtrada de una secuencia de numeros hasta que el numero sea igual que el centinela
     * @param Intereg $valorCentinela
     * @return Intereg
     */
    function sumaFiltrada ($valorCentinela){
        // Intereg $acumSuma, $centinela , $primerNumero
        $centinela = $valorCentinela;

        $primerNumero = "*"; //?

        $acumSuma = 0;

        $ultimoNumero = -1000;
        

        while ($primerNumero <> $centinela) {
            echo "Ingrese un numero: ";
            $primerNumero = trim(fgets(STDIN));

            if ($primerNumero <> $centinela) {

                if($primerNumero > $ultimoNumero){
                    $ultimoNumero = $primerNumero;
                    $acumSuma = $acumSuma + $primerNumero;
                }

            }
        }
        return $acumSuma;
    }
         $r = sumaFiltrada(-1000);
         echo $r;



    /*
    $centinela = 10; // $nro
    //$primerNumero = 1000;
    $ultimoNumero = -1;
    $num = -1;
    $suma = 0; //Inicializamos en 0 para acumular la suma
    while ($num <> $centinela) {
        
        echo "Ingrese numero: ";
        $num = trim(fgets(STDIN));

        if ($num == $centinela) {
            echo "Adios";
        }elseif ( $num > $ultimoNumero) {
            $ultimoNumero = $num;
            $suma = $suma + $num;
        }
    }
    //echo "Numero mayor".$ultimoNumero;
    echo "Suma".$suma;
    */
?>
