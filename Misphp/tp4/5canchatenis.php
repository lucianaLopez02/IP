<?php
/**
*Diseñar un modulo que imprima el cartel (caños)
*ø
*/
function caños () { //Sin parametros
        echo " +----+              |               +----+ \n";
        //sin retorno
}

/**
*Diseñar  un modulo que imprima el cartel (campo)
*ø
*/

function campo (){
       echo " |                   |                    | \n";
}

/**
*Diseñar un modulo que imprima el cartel (linea media)
*ø
*/

function lineaMedia (){
  echo " |        |          |           |        | \n";
}

/**
*Diseñar un modulo que imprima el cartel (linea de banda)
*ø
*/

function lineaBanda (){
  echo " +-------------------+--------------------+ \n";
}

//Programa Principal
//Llamada a los modulos
    lineaBanda();
    campo();
    lineaBanda();
    lineaMedia();
    lineaMedia();
    lineaMedia();
    lineaBanda();
    lineaMedia();
    lineaMedia();
    lineaMedia();
    lineaBanda();
    campo();
    lineaBanda();

 ?>
