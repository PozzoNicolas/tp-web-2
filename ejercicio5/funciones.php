<?php
/*Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
valores.
a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while*/

function sumatoria_a ($array){
    $suma = 0;
    for ($i=0; $i < count($array) ; $i++) { 
      $suma += $array[$i];
    }
    return $suma;
}

function sumatoria_b ($array){
    $suma = 0;
    foreach ($array as $value) {
        $suma += $value;
    }
    return $suma;
}

function sumatoria_c ($array){
    $suma = 0;
    $a = 0;
    while ($a < count($array)) {
        $suma += $array[$a];
        $a++;
    }
    return $suma;
}