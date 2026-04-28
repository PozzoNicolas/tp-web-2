<!doctype html>
<html lang=" es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Ejercicio 11</title>
</head>
<body class="w3-container w3-margin">
<?php
include_once "../includes1/header.php";
include_once "../includes1/nav.php";


echo "<div class='w3-content w3-center' style='max-width:600px'>";
echo "<h2 class='w3-margin-bottom w3-margin-top'>Resultado del Lanzamiento</h2>";

if (isset($_GET['cantidad']) && !empty($_GET['cantidad'])) {
    $cantitadDeDados = $_GET['cantidad'];
    $suma = 0;

    
    echo "<div class='w3-card w3-padding-24 w3-white w3-round'>";

    echo "<div class='w3-container'>";
    for ($i = 0; $i < $cantitadDeDados; $i++) {
        $valorDelDado = rand(1, 6);
        $suma += $valorDelDado;
       
        echo "<img class='w3-animate-zoom' src='img/dado$valorDelDado.png' style='width:80px; margin:8px;'>";
    }
    echo "</div>";

    echo "<h3 class='w3-border-top w3-padding-16'>Total: <b>$suma</b></h3>";

    echo "</div>"; // Cierre del card

} else {
    echo "<div class='w3-panel w3-pale-red w3-border w3-border-red w3-round'>";
    echo "<h4>¡Atención!</h4>";
    echo "<p>Por favor seleccione la cantidad de dados a lanzar.</p>";
    echo "</div>";
}


echo "<div class='w3-margin-top'>";
echo "<a class='w3-button w3-light-grey w3-border w3-round' href='index.php'>Volver a intentar</a>";
echo "</div>";
echo "</div>"; 
?>
</body>
</html>