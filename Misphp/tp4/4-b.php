<?php 
/**Averiguar valor de perímetro sabiendo el lado de un Triangulo equilátero
 *@param int $lado_t
 *@return int $perimetro 
*/
function valorPerimetro ($lado_t) {
    //int perimetro
    $perimetro = 3 * $lado_t;
    return ($perimetro);
}

/**Averiguar el valor de altura sabiendo el lado de un Triangulo equilátero
 *@param int $lado_t
 *@return float $altura
*/
    function valorAltura ($lado_t){
    //float altura
    $altura = sqrt(pow($lado_t,2)-pow(($lado_t/2),2));
    return ($altura);
}

/**Averiguar el área sabiendo el lado de un triángulo equilátero
 *@param int $lado_t
 *@return float $area
*/
    function valorArea ($lado_t){
    //float area
    $area = ($lado_t * valorAltura($lado_t) )/2;
    return ($area);
}

//Programa Principal CalcularModulosTriangulo

    /*Calcular perímetro, altura y área dado la medida (cm) de un triángulo equilátero*/
    /*int $lado*/
    /*float perimetro,altura,area)*/
    echo "Ingrese lado de un triángulo equilátero(cm):" ;
    $lado = trim(fgets(STDIN));
    $perimetro = valorPerimetro($lado);
    $altura = valorAltura($lado);
    $area = valorArea($lado);

    echo "Dado un triángulo equilátero de lado ".$lado. " cm, su perímetro es ".$perimetro. " cm, y su area es " .$area. " cm2";


?>
