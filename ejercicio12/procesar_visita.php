<!doctype html>
<html lang=" es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Ejercicio 12</title>
</head>
<body class="w3-container w3-margin">
<?php
include_once "../includes1/header.php";
include_once "../includes1/nav.php";
echo "<h2>Ejercicio 12: Contador de visitas… extraterrestres</h2>";

$nombre = $_POST['nombre'];
$planeta = $_POST['planeta'];

//Defino el archivo de memoria
$archivo = "visitas.json";

if (file_exists($archivo)) {//si el archivo existe entro y hago:
    $contenidoActual = file_get_contents($archivo); // guardo en una variable todoo lo que tiene el archivo.
    $listaVisitantes = json_decode($contenidoActual, true);//convierto el texto json en un array php.
} else {
    $listaVisitantes = [];
}

//creo el visitante que se acaba de registrar en el form
$nuevoVisitante = [
    "nombre" => $nombre,
    "planeta" => $planeta
];

//agrego el nuevo visitante al array
$listaVisitantes [] = $nuevoVisitante;

//convierto el array en texto json para, después, subirlo al archivo .json
$datosParaGuardad = json_encode($listaVisitantes);
//agrego al archivo .json el array convertido en texto.
//en la primera llamada al procesar_visita.php, el archivo json no está creado, y si no está creado, se crea cuando
//llega a esta linea 'file_put.contents.
file_put_contents($archivo, $datosParaGuardad);

echo "<div class='w3-content' style='max-width: 600px; margin-top: 50px;'>";
echo "<div class='w3-container w3-card-4 w3-light-grey w3-text-blue w3-round-large w3-padding-32'>";

echo "<h2 class='w3-center'>Control Interplanetario</h2>";

$contadorNoTierra = 0;
echo "<ul class='w3-ul w3-border w3-white w3-round'>";


foreach ($listaVisitantes as $v) {
    echo "<li class='w3-padding-16'>";
    echo "<b>" . $v['nombre'] . "</b> - Procedencia: " . $v['planeta'];
    echo "</li>";

    if (strtolower($v['planeta']) !== 'tierra') {
        $contadorNoTierra++;
    }
}
echo "</ul>";


echo "<div class='w3-panel w3-blue w3-round w3-padding-16 w3-margin-top'>";
echo "<h4>Total de visitas extraterrestres: <b>$contadorNoTierra</b></h4>";
echo "</div>";

echo "<a href='index.php' class='w3-button w3-block w3-dark-grey w3-round-xxlarge w3-margin-top'>REGISTRAR OTRO</a>";

echo "</div>";
echo "</div>";

?>


</body>
</html>
