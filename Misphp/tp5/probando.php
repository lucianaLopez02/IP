<?php function probando($valor){
 if($valor>0){
 echo "El numero e s p o s i t i v o";
 $valor = -$valor;
 }
 if (!($valor>0)){
 echo"El numero NO e s p o s i t i v o";
 }
}
 probando(25);
 ?>