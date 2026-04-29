<!doctype html>
<html lang=" es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Ejercicio 15</title>
</head>

<body class="w3-container w3-margin">
    <?php
    include_once "../includes1/header.php";
    include_once "../includes1/nav.php";
    include_once "funcion.php";
    echo "<h2>Ejercicio 15: Buscando una palabra en un pajar, más bien en un String:  La Matrix… digo, Matriz</h2>";
    $texto = "Esta función recorre un texto analizando cada letra de forma individual para encontrar coincidencias exactas con una clave específica. El algoritmo mide el tamaño de la palabra y compara las posiciones consecutivas sin usar funciones integradas.";
    ?>
    <p class="w3-panel w3-light-grey w3-padding"><b>Texto:</b> <?php echo $texto; ?></p>

    <form action="index.php" method="GET" class="w3-container w3-card-4 w3-padding">
        <h4>Ingrese qué palabra desea buscar: </h4>
        <input class="w3-input w3-border" type="text" name="clave" required>
        <br>
        <button class="w3-button w3-blue" type="submit">Contar</button>
    </form>

    <?php
    // PROCESAMIENTO: Solo si el usuario envió una palabra
    if (isset($_GET['clave'])) {
        $claveUsuario = $_GET['clave'];
        $cantidad = buscar($claveUsuario, $texto);

        echo "<div class='w3-panel w3-pale-blue w3-leftbar w3-border-blue'>";
        echo "<p>Resultados para '<b>$claveUsuario</b>': Se encontraron <b>$cantidad</b> ocurrencias.</p>";
        echo "</div>";
    }
    ?>
</body>    
</html>