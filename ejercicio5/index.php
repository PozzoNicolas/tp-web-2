<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Suma en array</title>
</head>

<body class="w3-container w3-margin">
    <?php
    include_once "../includes1/header.php";
    include_once "../includes1/nav.php";
    require_once "funciones.php";
    $array = [10, 20, 30, 40];
    echo "<h2>Ejercicio 5: Sumatoria de Vectores</h2>";
    echo "<h3><i>Elementos del array:</i> ";
    for ($i = 0; $i < count($array); $i++) {
        echo "<i>" . $array[$i] . "; " . "</i>";
    }
    echo"</h3>";

    echo "<div class='w3-panel w3-leftbar w3-border-red w3-pale-red'>";
    echo "<p>Suma con For.<br><b>Resultado:</b> " . sumatoria_a($array) . "</p>";
    echo "</div>";

    echo "<div class='w3-panel w3-leftbar w3-border-yellow w3-pale-yellow'>";
    echo "<p>Suma con For each.<br><b>Resultado:</b> " . sumatoria_b($array) . "</p>";
    echo "</div>";

    echo "<div class='w3-panel w3-leftbar w3-border-blue w3-pale-blue'>";
    echo "<p>Suma con While.<br><b>Resultado:</b> " . sumatoria_c($array) . "</p>";
    echo "</div>";
    ?>
</body>

</html>