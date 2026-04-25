<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Incremento de variable</title>
</head>

<body class="w3-container w3-margin">
    <?php
    include_once "../includes1/header.php";
    include_once "../includes1/nav.php";
    require_once "funciones.php";
    $numeroAIncrementar = 5;
    echo "<h2>Ejercicio 4: Incremento</h2>";
    echo "<div class='w3-panel w3-leftbar w3-border-yellow w3-pale-yellow'>";
    echo "<p> Valor pre incremento: " . $numeroAIncrementar . "</p>";
    incrementar($numeroAIncrementar);
    echo "<p> Valor post incremento: " . $numeroAIncrementar . "</p>";
    echo "</div>";







    ?>
</body>

</html>