<?php

function buscar($clave, $texto)
{
    $lenght = medirClave($clave);
    $y = 0;
    $ocurrencias = 0;

    while (isset($texto[$y])) {
        $coincindencia = 0; //Lo declaro aca para que se reinicie cada vez que arranco una nueva busqueda.
        for ($i = 0; $i < $lenght; $i++) {
            if (isset($texto[$y + $i]) && strtolower($texto[$y + $i]) === strtolower($clave[$i])) {
                $coincindencia++;
            } else {
                break; //si no coindicen, salgo. No tiene sentido seguir iterando $clave
            }
        }

        if ($coincindencia == $lenght) {
            $ocurrencias++;
        }
        $y++;
    }
    return $ocurrencias;
}

function medirClave($clave)
{

    $i = 0;
    while (isset($clave[$i])) { //Mientras encuetre algo en esa direccion va a resultar true, sino, false y sale del while
        $i++;
    }
    return $i;
}
