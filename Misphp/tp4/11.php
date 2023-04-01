<?php 
/** modulo que pida un numero de 4 digitos y lo encripte */
  function encriptacion ($n){ //1576

      //paso 1. separar el numero por digitos
        $r_c =  $n % 10; //residuo = 6
        $r_t = (int)($n/10) % 10; //residuo = 7
        $r_s = (int)($n/100)% 10; //residuo = 5
        $r_p = (int)($n/1000); //residuo = 1
       
      //paso 2. suma del digito mas 7 y resto 10
        $s1 =  ($r_p + 7) % 10; // 1 + 7 mod 10 = 8
        $s2 =  ($r_s + 7) % 10; //5 + 7 mod 10 = 2
        $s3 =  ($r_t + 7) % 10; //7 + 7 mod 10 = 4
        $s4 =  ($r_c + 7) % 10; //6 + 7 mod 10 = 3
      //paso 3. intercambio (3.1)
        $a  = $s1; //a = 8
        $s1 = $s3; // 8 = 4
        $s3 = $a; // 4 = a
      //paso 3. intercambio (4.2)
        $a  =  $s2; // a = 2
        $s2 = $s4; // 2 = 3
        $s4 = $a; //  3 = a

      //paso 4. resultado final
        $encriptado = ($s1*1000)+($s2*100)+($s3*10)+$s4;

    return $encriptado;
}


/** modulo que pida un numero encriptado y lo desencripte */
  function desencriptacion ($n){ //4382

      //paso 1. separar el numero por digitos
        $r_c =  $n % 10; //residuo = 2
        $r_t = (int)($n/10) % 10; //residuo = 8
        $r_s = (int)($n/100)% 10; //residuo = 3
        $r_p = (int)($n/1000); //residuo = 4
       
      //paso 2. suma del digito 10 menos 7 y resto 10
        $s1 =  (($r_p + 10) - 7) % 10; // ((4+10) - 7) mod 10 = 7
        $s2 =  (($r_s + 10) - 7) % 10; //((3+10)- 7) mod 10 = 6
        $s3 =  (($r_t + 10) - 7) % 10; //((8+10) - 7) mod 10 = 1
        $s4 =  (($r_c + 10) - 7) % 10; //((2+10) - 7) mod 10 = 5
      //paso 3. intercambio (1.3)
        $a  = $s3; //a = 1
        $s3 = $s1; // 1 = 7
        $s1 = $a; // 7 = a
      //paso 3. intercambio (2.4)
        $a  =  $s4; // a = 5
        $s4 = $s2; // 5 = 6
        $s2 = $a; //  6 = a

      //paso 4. resultado final
        $desencriptado = ($s1*1000)+($s2*100)+($s3*10)+$s4;

    return $desencriptado;
}

//Programa Principal
   echo "Ingrese un numero de 4 digitos: ";
   $numero =trim(fgets(STDIN));

    $encrip = encriptacion($numero);
    $desencrip = desencriptacion($encrip);
    echo "El número encriptado es: " .$encrip. " Y desencriptado es: ".$desencrip;




