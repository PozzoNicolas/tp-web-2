<?php
/*Ejercicio 1: Semáforo
Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
“amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
“avance” o “estado desconocido” ante un caso no esperado.
a) función semaforo_a($color): Resuelva la solución utilizando if else
b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
c) función semaforo_c($color): Resuelva la solución utilizando <switch></switch>*/
function semaforo_a($color){
    if($color == "rojo"){
        return "Frene";
    }else if($color == "amarillo"){
        return "Precaucion";
    }else if ($color == "verde"){
        return "Avance";
    }else {
        return "Estado desconocido";
    }
}

function semaforo_b($color){
   return ($color == "rojo") ? "Frene" : (($color == "amarillo") ? "Precaucion" :  (($color == "verde") ? "Avance" : "Estado desconocido"));
}

function semaforo_c($color){
    switch ($color) {
        case 'rojo':
            return "Frene";
            break;
        case 'amarillo':
            return "Precaucion";
            break;
        case 'verde':
            return "Avance";
            break;
        default:
            return "Estado desconocido";
            break;
    }
}