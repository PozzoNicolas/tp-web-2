<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Ejercicio 10</title>
    <style>
        img{
            width: 65%;
            height: 500px;
        }
    </style>
</head>
<body class="w3-container w3-margin">
<?php
include_once "../includes1/header.php";
include_once "../includes1/nav.php";
echo "<h2>Ejercicio 10: Insta-reciclado (para cuidar el medio ambiente)</h2>";
if(isset($_GET['foto'])){

    $fotoMostrar = $_GET['foto'];
    $rutaCompleta = "../imagenes/" . $fotoMostrar;

    echo "<h2 class='w3-center'> <i>$fotoMostrar</i></h2>";
    echo "<div class='w3-display-container w3-center'>";

    echo "<img src='$rutaCompleta' class='w3-card-4' style='max-width:80%;'>";
    echo "</div>";

}else {
    echo "<p class='w3-panel w3-red'>Error: No se seleccionó ninguna imagen.</p>";
}
echo "<div class='w3-center w3-margin-top'>";
echo "<a href='index.php' class='w3-button w3-black'>Volver a la galería</a>";
echo "</div>";
?>
</body>
</html>