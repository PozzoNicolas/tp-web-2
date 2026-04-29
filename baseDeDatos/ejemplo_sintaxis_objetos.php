<h2>Hola PW2 - Hoy Base de datos</h2>
<?php

class Vikingo{
    private $barba;
    private $altura;
    private $peso;
    private $fuerza;
    protected $armas ;

    function __construct($barba, $altura, $peso, $fuerza, $armas){
        $this->barba = $barba;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->fuerza = $fuerza;
        $this->armas = $armas;
    }

    function medirseBarbas($otroVikingo){
        return $this->barba > $otroVikingo->barba ?
            "Mi barba es más larga" :
            "Me gano, soy poco vikingo";
    }

    function presentarse()
    {
        $armas = "";
        foreach ($this->armas as $arma){
            $armas .= " " . $arma;
        }

        return "Hola! Soy X mi barba mide " .
            $this->barba .
            " y tengo las siguientes armas " . $armas;
    }

}

class Thor extends Vikingo{
    function __construct(){
        parent::__construct(50,210,120,100, []);
    }

    function medirseBarbas($otroVikingo){
        return "Siempre gano yo";
    }

    function llamarMartillo(){
        $this->armas = ["Martillo"];
    }

}

// Polimorfismo
// Si hace cuak es un pato!
class Pato{
    public $barba = 100;

    function medirseBarbas($otroVikingo){
        return "Soy odin, gano yo y nadie mide barbas contra mi!";
    }

    function presentarse()
    {
        return "Hola soy un pato Vikingo";
    }
}

$Eyvhor = new Vikingo(30,190,95, 40, ["Hacha", "Escudo"]);
$Ragnar = new Vikingo(40,180,100, 50, ["Hacha", "Hacha"]);
$Thor = new Thor();
$Pato = new Pato();

echo $Eyvhor->medirseBarbas($Ragnar) . "<br>";
echo $Ragnar->medirseBarbas($Eyvhor) . "<br>";
echo $Thor->medirseBarbas($Ragnar) . "<br>";
echo $Eyvhor->medirseBarbas($Pato) . "<br>";
echo $Pato->medirseBarbas($Eyvhor) . "<br>";

echo $Eyvhor->presentarse(). "<br>";
echo $Thor->presentarse(). "<br>";

$Thor->llamarMartillo();
echo $Thor->presentarse(). "<br>";

$vikinkgosYPatos = [$Eyvhor, $Thor, $Ragnar , $Pato];

echo "<h2>Vikingos</h2>";
foreach ($vikinkgosYPatos as $vikinkgo){
    echo $vikinkgo->presentarse() . "<br>";
}