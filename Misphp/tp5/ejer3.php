<?php 
/* Programa Principal DeterminarNota*/
/*int $nota */
echo "Ingrese nota: ";
$nota = trim(fgets(STDIN));


if ($nota >= 0 && $nota <= 10){
  if($nota >= 4){
    echo "aprobo";
  }else{
    echo "desaprobo";
  }
}else{
    echo "Nota invalida";
}

?>
