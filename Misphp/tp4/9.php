<?php 

/** calcula la longitud de la circunferencia de la base (cm)*/
function calcLong ($radio){
    $calc_l = 2  * M_PI * $radio;
    return $calc_l;
}

/** calcula la superficie base (cm2)*/
function calcBase ($radio){
    $calc_b = M_PI * pow($radio,2) ;
    return $calc_b;
}

/** calcula la superficie lateral del cilindro (cm2)*/
function calcSuperLateral ($radio, $altura){
    $calc_lsa = 2 * M_PI * $radio * $altura ;
    return $calc_lsa;
}

/** calcula la superficie total del cilindro  (cm2)*/
function calcSuperTotal ($radio, $altura){
    $calc_tsa = calcSuperLateral($radio,$altura)+(2 * calcBase($radio));
    return $calc_tsa;
}

/** calcula el volumen del cilindro  (cm3)*/
function calcVol($radio, $altura){
    $calc_v = calcBase($radio) * $altura ;
    return $calc_v;
}


/** PROGRAMA PRINCIPAL */

echo "Ingrese altura (cm):";
$h = trim(fgets(STDIN)); //5
echo "Ingrese radio(cm):";
$r = trim(fgets(STDIN)); //3.5

$longitud = number_format((calcLong($r)), 2,'.','.');
$base = round(calcBase($r));
$lateral = round(calcSuperLateral($r,$h));
$stc = round(calcSuperTotal($r,$h)); 
$volumen = round(calcVol($r,$h));

echo "Cilindro con h= ".$h."y r= ".$r.":\n";
echo "longitud de la circunferencia de la base (cm) =".$longitud."\n";
echo "superficie base (cm2) = ".$base."\n";
echo  "superficie lateral del cilindro (cm2) = " .$lateral."\n";
echo  "superficie total cilindro (cm2) = " .$stc."\n";
echo "volumen del cilindro (cm3) = ".$volumen."\n";