<?php
/* 
function sumaFiltrada($x){
    // Int $resultadoSuma
    $x = -1;
    $acumSuma = 0;
    $num = 0;
        while ($acumSuma > $num) {
            echo "Ingrese un numero: ";
            $num = trim(fgets(STDIN)); // 0
            $acumSuma = $acumSuma + $num; //0 + 0 = 0
        }

    return $acumSuma;
}
 */   


   // function sumaFiltradas($nro){
       
        $x = 0; // x centinela
        $acumSuma = 0;
       

        echo "Ingrese numero: ";
        $viejoNumero = trim(fgets(STDIN)); //1

            while ($viejoNumero <> $x ) {
                    $acumSuma =  $acumSuma + $viejoNumero;

                    while ($nuevoNumero > $viejoNumero) {
                        echo "Ingrese numero: ";
                        $nuevoNumero = trim(fgets(STDIN));
                    }
                
            }
            echo $acumSuma;
             


 //       return $acumSuma;
   // }
    
    
    

?>
