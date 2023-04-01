<?php 
function distanciaPunto($x1,$y1,$x2,$y2){
    $restaDeX=($x2-$x1);
    $restaDeY=($y2-$y1);
    $distancia = sqrt( pow($restaDeX,2) + pow($restaDeY,2));
    return($distancia); 
}

$radioDosPuntos = distanciaPunto(0,0,6,3);
echo $radioDosPuntos;


/*
//function estaDentroRadioCircunferencia($x2,$y2,$radio){
    $radioDosPuntos = pow($radioDosPuntos,2); //6,70^2 = 45
    //echo ($radioDosPuntos);
    $ecuacionCanonica = (pow(6,2) + pow(3,2)); //45
    //echo ($ecuacionCanonica);

    if ($radioDosPuntos == $ecuacionCanonica) { 
        $mensaje = "En el circulo";
        
    } elseif ($radioDosPuntos < $ecuacionCanonica){
        $mensaje = "Esta adentro";
    }else{
        $mensaje = "Esta afuera";
    }
    
//}


echo $mensaje;