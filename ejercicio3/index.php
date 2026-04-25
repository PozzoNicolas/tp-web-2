<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Concatenar textos</title>
</head>

<body class="w3-container w3-margin">
    <?php
    include_once "../includes1/header.php";
    include_once "../includes1/nav.php";
    require_once "funciones.php";
    $texto1 = "Hola";
    $texto2 = "Mundo!";
    echo "<h2>Ejercicio 3: Concatenar textos</h2>";
    echo "<div class='w3-panel w3-leftbar w3-border-green w3-pale-green'>";
    echo "<p>Texto 1 recibido: '$texto1'</p>";
    echo "<p>Texto 2 recibido: '$texto2'</p>";
    echo "<p><b>Resultado</b>: " . concatenar($texto1, $texto2) . "</p>";
    echo "</div>";
    ?>
</body>

</html>