<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Binomio</title>
</head>

<body class="w3-container w3-margin">
    <?php
    include_once "../includes1/header.php";
    include_once "../includes1/nav.php";
    require_once "funciones.php";
    $valA = 3;
    $valB = 2;

    $valA2 = 4;
    $valB2 = 5;
    echo "<h2>Ejercicio 2: Binomio cuadrado perfecto</h2>";
    echo "<div class='w3-panel w3-leftbar w3-border-red w3-pale-red'>";
    echo "<h4>Método A (Suma y potencia)</h4>";
    echo "<p>Valores utilizados para el ejemplo: '2' y '3'. <br><b>Resultado:</b> " . binomioCuadradoPerfecto_a($valA, $valB) . "</p>";
    echo "</div>";

    echo "<div class='w3-panel w3-leftbar w3-border-blue w3-pale-blue'>";
    echo "<h4>Método B (Fórmula desarrollada)</h4>";
    echo "<p>Valores utilizados para el ejemplo: '4' y '5'. <br><b>Resultado:</b> " . binomioCuadradoPerfecto_b($valA2, $valB2) . "</p>";
    echo "</div>";
    ?>
</body>

</html>