<?php
/*Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
la función, el valor del parámetro haya sido incrementado en 1
(Ver pasaje de parámetros por referencia)*/

function incrementar (&$variable){ //el & me sirve para que php trabaje sobre la variable original. 
    $variable++;
}
