<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Ejercicio 10</title>
    <style>
        img {
            height: 163px;
        }
    </style>
</head>

<body class="w3-container w3-margin">
<?php
include_once "../includes1/header.php";
include_once "../includes1/nav.php";
echo "<h2>Ejercicio 10: Insta-reciclado (para cuidar el medio ambiente)</h2>";
//instancio un array donde me va a guardad cada una de las rutas de las imagenes a mostrar.
$fotos = glob("../imagenes/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
//recorro el array y guardo cada ruta en la variable '$ruta' y luego la muestro.
foreach ($fotos as $ruta) {
    echo "<div style='display:flex; justify-content:center; margin-top:4%'>";
    echo "<div class='w3-card-4 w3-margin w3-center' style='width:300px; display:inline-block;'>";
    echo "<div class='w3-container w3-center'>";
    $nombreArchivo = basename($ruta);
    // basename "corta" el nombre de la ruta. Ej: imagenes/pan.jpg, basename te deja solo pan.jpg
    echo "<p><a href='detalle.php?foto=$nombreArchivo'>" . $nombreArchivo . "</a></p>";
    echo "</div></div></div>";
}
include_once "../includes1/formCargarImagen.php";
?>
</body>

</html>