<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Semáforo</title>
</head>
<body class="w3-container w3-margin">
    <?php
    include_once "../includes1/header.php";
    include_once "../includes1/nav.php";
    /*C:\php\php.exe -S localhost:8000*/
    require_once "funciones.php";
    echo "<h2>Ejercicio 1: Semáforo</h2>";
    if ($_GET['color']) {
        $colorRecibido = $_GET['color'];
        echo "<div class='w3-panel w3-leftbar w3-border-red w3-pale-red'>";
        echo "<h4>Función A (if/else)</h4>";
        echo "<p>Color: $colorRecibido - Estado: " . semaforo_a($colorRecibido) . "</p>";
        echo "</div>";

        echo "<div class='w3-panel w3-leftbar w3-border-yellow w3-pale-yellow'>";
        echo "<h4>Funcion B (con If inline)</h4>";
        echo "<p>Color: $colorRecibido - Estado: " . semaforo_b($colorRecibido) . "</p>";
        echo "</div>";

        echo "<div class='w3-panel w3-leftbar w3-border-green w3-pale-green'>";
        echo "<h4>Funcion C (con Switch)</h4>";
        echo "<p>Color: $colorRecibido - Estado: " . semaforo_c($colorRecibido) . "</p>";
        echo "</div>";
    } else {
        echo "<h3>Por favor, ingresá un color en la URL (ej: ?color=rojo)</h3>";
    }
    ?>
</body>
</html>