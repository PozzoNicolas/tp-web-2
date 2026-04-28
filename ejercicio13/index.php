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
    echo "<h2>Ejercicio 13: ConociendINIs con el Menú no saludable</h2>";
    ?>

    <div class="w3-content" style="max-width: 500px; margin-top: 50px;">
        <form action="resultado_menu.php" method="post" class=" w3-container w3-card-4 w3-light-grey w3-text-black w3-round-large w3-padding-32">

            <h2 class="w3-center w3-margin-bottom">Menú No Saludable</h2>
            <p class="w3-center w3-text-grey">Seleccioná los pasos que querés pedir:</p>

            <div class="w3-section">
                <div class="w3-padding">
                    <input type="checkbox" name="pasos[]" value="entrada">
                    <label>Entrada</label>
                </div>
                <div class="w3-padding">
                    <input type="checkbox" name="pasos[]" value="plato_principal">
                    <label>Plato principal</label>
                </div>
                <div class="w3-padding">
                    <input type="checkbox" name="pasos[]" value="acompaniamiento">
                    <label>Acompaniamiento</label>
                </div>
                <div class="w3-padding">
                    <input type="checkbox" name="pasos[]" value="postre">
                    <label>Postre</label>
                </div>
            </div>

            <div class="w3-section">
                <button type="submit" class="w3-button w3-block w3-blue w3-hover-indigo w3-padding-large w3-card-2">
                    <b>VER MI PEDIDO</b>
                </button>
            </div>

        </form>
    </div>
</body>

</html>