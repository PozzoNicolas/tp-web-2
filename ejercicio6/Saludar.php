<?php

class Saludar
{
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    private function definirPrefijo($horario)
    {

        $prefijo = null;
        if ($horario >= 5 && $horario <= 13) {
            $prefijo = "Buenos dias ";
        } elseif ($horario >= 13 && $horario <= 21) {
            $prefijo = "Buenas tardes ";
        } else {
            $prefijo = "Buenas noches ";
        }
        return $prefijo;
    }

    public function saludoFormal($horario)
    {

        if ($horario < 0 || $horario > 24) {
            return "Ingrese un horario válido (0-24hs).";
        }
        return $this->definirPrefijo($horario) . $this->nombre . " " . $this->apellido .".";
    }

    public function saludoInformal($horario)
    {

        if ($horario < 0 || $horario > 24) {
            return "Ingrese un horario válido (0-24hs).";
        }
        $prefijo = $this->definirPrefijo(($horario));
        $saludoMinuscula = strtolower($prefijo);
        if ($saludoMinuscula == "buenos dias ") {
            $saludoMinuscula = "un buen día";
        }

        return "¡Hola " . $this->nombre . "! " . "Que tengas " . $saludoMinuscula . ".";
    }
}