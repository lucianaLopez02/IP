<?php 

/*echo "Nro minimo: ";
$nroMin = trim(fgets(STDIN));
echo "Nro maximo: ";
$nroMax = trim(fgets(STDIN));

if ($nroMin > $nroMax) {
    $aux =  $nroMin;
    $nroMin = $nroMax;
    $nroMax = $aux;
}

echo "El valor de numero minimo es: ".$nroMin."\n";
echo "El valor de numero maximo es: ".$nroMax;
?>
*/
    

    // s0 = 0 + 1 // 1
    // s1 = 1 + 1 // 2

    // s2 = s0 + s1 // 3

 /*   $s0 = 0;
    $s1 = 1;



    $v1 + $v2 = $v3;
    $v1 = $v2 => $v2 = $v3;




    $s2 = $s0 + $s1;  //$s2 = 1


    

for ($i=1; $i <= 5; $i++) { 
    $sumaSucesiva = $denominador + $b; //$sumaSucesiva = 2 <- 1+1=2
    $denominador = $b; // DENOMINADOR = 1, en la proxima DENOMINADOR = 2
    $b = $sumaSucesiva; // b = 2 , B = 3

    echo $denominador."";
    
}*/
  /*  $cont = 0;
     do {
        echo "Ingrese nombre del jefe de hogar nro ".$cont.": ";
        $nomJefe = trim(fgets(STDIN));

        echo "Ingrese cantidad de niños menores a 18 años: ";
        $cantNinos = trim(fgets(STDIN));

        echo "El jefe ".$nomJefe." <-- ".$cantNinos." niños\n"; 

        
        $jefeMax = $nomJefe;

        echo "¿Desea ingresar datos de otra familia? (s/n): ";
        $r = trim(fgets(STDIN));
        $cont++;

     } while ($r == "s" || $r == "si");
        
        */

  /*
            // Intereg $sumatoriaDigitos
            echo "Ingrese numero";
            $nro = trim(fgets(STDIN));

            $cantidadDivisores = 0;
                
                for ($i=1; $i < $nro ; $i++){ 
                    if ($nro % $i == 0) {
                        $cantidadDivisores++;
                    }
                    
                }
                echo $cantidadDivisores;
                */
             
                    // Intereg $sumatoriaDigitos
                    //$esPrimo = false;
                    /*echo "Ingrese numero";
                    $nro = trim(fgets(STDIN));
                    
                    $sumatoriaDigitos = 0;

                    while ($sumatoriaDigitos < 10) {
                        $digito = $nro % 10; // 3851 % 10 = 1
                        $nro = (int)($nro / 10); // 
                        $sumatoriaDigitos = $sumatoriaDigitos + $digito;
                        //echo $digito."\n";
                        
                    }
                    echo $sumatoriaDigitos;

|                       */

                            echo "Ingrese numero: \n"; //pedimos numero
                            $nro = trim(fgets(STDIN)); //3851
                    
                            $sumaDigitos = 0; //acumula la suma

                            while($nro >= 10){ 
                                $sumaDigitos=0;   

                                while ($nro <> 0) { 
                                      $digito = $nro % 10; 
                                      $nro = (int)($nro/ 10); 
                                      $sumaDigitos = $sumaDigitos + $digito; 
                                }
                                
                              $nro=$sumaDigitos; 
                            }
                    
                            
                        