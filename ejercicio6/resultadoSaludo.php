<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body class="w3-container w3-margin">
    <?php
    include_once "../includes1/header.php";
    //Puedo usar este php tmb, agregar en el action del form para usarlo.
    require_once "Saludar.php";
    include_once "../includes1/nav.php";
    echo "<h2>Ejercicio 6: Generar Saludo</h2>";
    $horaEntera = (int)$_POST["hora"];
    $nuevoSaludo = new Saludar($_POST["nombre"], $_POST["apellido"]);
    echo "<div class='w3-panel w3-leftbar w3-border-red w3-pale-red'>";
    echo "<p><strong>Saludo Formal:</strong> " . $nuevoSaludo->saludoFormal($horaEntera) . "</p>";
    echo "</div>";

    echo "<div class='w3-panel w3-leftbar w3-border-blue w3-pale-blue'>";
    echo "<p><strong>Saludo Informal:</strong> " . $nuevoSaludo->saludoInformal($horaEntera) . "</p>";
    echo "</div>";  
    ?>
</body>

</html>