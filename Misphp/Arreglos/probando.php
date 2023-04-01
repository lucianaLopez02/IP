//con foreach
        /*foreach ($arregloTemperaturas as $indice => $elemento) {
            $resultadoLista = "El valor de la posicion ".$indice." es ".$elemento."\n";
        }*/


        //$resultadoLista = "El valor de la posicion ".$i." es ".$arregloTemperaturas[$i]."\n";


        /**
 * mostrar por pantalla (nombre,edad y tipo) de la mascota
 * @param array $cargarMascotas
 */
/*function mostrarDatosMascota($misMascotas){
    
    foreach ($misMascotas as $key => $value){
        echo "key: " .$key. "\n";
        echo "value: ".$value["nombre"]."/n";
    }
}*/

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