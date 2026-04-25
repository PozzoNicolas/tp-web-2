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
    include_once "../includes1/nav.php";
    echo "<h2>Ejercicio 6:  Nombre completo</h2>";
    ?>
<form class="w3-container w3-padding-24" action="../ejercicio6/resultadoSaludo.php" method="post">

    <label>Nombre: </label>
    <input class="w3-input w3-section" type="text" name="nombre">

    <label>Apellido: </label>
    <input class="w3-input w3-section" type="text" name="apellido">

    <label>Ingrese un horario: </label>
    <input class="w3-input" type="time" name="hora">

    <button class="w3-section" type="submit">Enviar</button>
</form>
<?php
require_once "Saludar.php";
if ($_POST){
    $horaEntera = (int)$_POST["hora"];
    $nuevoSaludo = new Saludar($_POST["nombre"], $_POST["apellido"]);
    echo "<p><strong>Saludo Formal:</strong> " . $nuevoSaludo->saludoFormal($horaEntera) . "</p>";

    echo "<p><strong>Saludo Informal:</strong> " . $nuevoSaludo->saludoInformal($horaEntera) . "</p>";
}


?>
</body>
</html>