<!doctype html>
<html lang=" es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Ejercicio 12</title>
</head>
<body class="w3-container w3-margin">
<?php
include_once "../includes1/header.php";
include_once "../includes1/nav.php";
echo "<h2>Ejercicio 12: Contador de visitas… extraterrestres</h2>";
?>
<div class="w3-content" style="max-width: 500px; margin-top: 50px;">
    <form action="procesar_visita.php" method="post"
          class="w3-container w3-card-4 w3-text-black w3-round-large w3-padding-32">

        <h2 class="w3-center w3-margin-bottom">Bienvenido al planeta Tierra</h2>

        <div class="w3-section">
            <label class="w3-text-grey"><b>Nombre del Visitante</b></label>
            <input class="w3-input w3-border w3-round w3-white" type="text" name="nombre"
                   placeholder="Ej: Ziggy Stardust" required>
        </div>

        <div class="w3-section">
            <label class="w3-text-grey"><b>Planeta perteneciente</b></label>
            <select class="w3-select w3-border w3-white w3-round" name="planeta" required>
                <option value="" disabled selected>Elegí tu procedencia</option>
                <option value="tierra">Tierra</option>
                <option value="marte">Marte</option>
                <option value="jupiter">Jupiter</option>
                <option value="venus">Venus</option>
                <option value="neptuno">Neptuno</option>
                <option value="mercurio">Mercurio</option>
            </select>
        </div>

        <div class="w3-section">
            <button type="submit" class="w3-button w3-block w3-blue w3-hover-indigo w3-padding-large w3-card-2">
                <b>REGISTRAR INGRESO</b>
            </button>
        </div>

    </form>
</div>
</body>
</html>