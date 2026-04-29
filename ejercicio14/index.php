<!doctype html>
<html lang=" es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Ejercicio 13</title>
</head>

<body class="w3-container w3-margin">
    <?php
    include_once "../includes1/header.php";
    include_once "../includes1/nav.php";
    echo "<h2>Ejercicio 14:  La Matrix… digo, Matriz</h2>";
    ?>
    <div class="w3-content" style="max-width: 500px; margin-top: 50px;">

        <form action="procesadorMatriz.php" method="post" class=" w3-container w3-card-4 w3-light-grey w3-text-black w3-round-large w3-padding-32">
            <p class="w3-center w3-margin-bottom">Ingrese la cantidad de elementos que va a contener la matriz cuadrada</p>
            <div class="w3-padding w3-center">
                <input type="number" name="tamanio" required>
            </div>
            <div class="w3-padding">
                <button type="submit" class="w3-button w3-block w3-blue w3-hover-indigo w3-padding-large w3-card-2">Enviar</button>
            </div>
        </form>
    </div>
</body>

</html>