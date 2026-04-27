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
echo "<h2>Ejercicio 11: Lanzar dados</h2>";
?>


<div class="w3-content" style="max-width: 400px; margin-top: 50px;">
    <form action="resultado.php" method="GET" class="w3-container w3-card-4 w3-round-large w3-padding-32">

        <h2 class="w3-center w3-margin-bottom">Lanzamiento de dados</h2>

        <div class="w3-section">
            <label class="w3-text-black"><b>Cantidad de dados</b></label>
            <select class="w3-select w3-border w3-white w3-round" name="cantidad">
                <option value="" disabled selected>Elegí una opción</option>
                <option value="1">1 Dado</option>
                <option value="2">2 Dados</option>
                <option value="3">3 Dados</option>
                <option value="4">4 Dados</option>
                <option value="5">5 Dados</option>
            </select>
        </div>

        <div class="w3-section">
            <button type="submit" class="w3-button w3-block w3-blue w3-hover-indigo w3-padding-large w3-card-2">
                <b>LANZAR DADOS</b>
            </button>
        </div>

    </form>
</div>
</body>
</html>
