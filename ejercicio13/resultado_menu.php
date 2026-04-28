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
    echo "<h2>Ejercicio 13: ConociendINIs con el Menú no saludable</h2>";

    echo "<div class='w3-content' style='max-width: 500px; margin-top: 50px;'>";
    echo "<div class='w3-container w3-card-4 w3-light-grey w3-text-black w3-round-large w3-padding-32'>";

    echo "<h2 class='w3-center w3-margin-bottom'>Tu Pedido</h2>";
    //Convierto el archivo .ini en un array asociativo
    $menuArray = parse_ini_file("menu.ini");

    //verifico que el usuario haya marcado alguna opcion: isset para saber si la variable está definida y !empty para saber que NO está vacia
    if (isset($_POST['pasos']) && !empty($_POST['pasos'])) {

        $pasosSeleccionados = $_POST['pasos']; //los pasos elegidos por el cliente, que llegaron por POST, lo meto en un array php   
        foreach ($pasosSeleccionados as $paso) {
            $comida = $menuArray[$paso]; //uso la variable 'paso' que, por ej tiene valor 'postre' y la uso de referencia para ver el valor de postre en el menu
            echo "<li class='w3-padding-16 w3-margin-left'>";
            echo "<span class='w3-text-grey w3-small'>" . strtoupper($paso) . ":</span><br>";
            echo "<b>$comida</b>";
            echo "</li>";
        }

        echo "</ul>";
    } else {
        echo "<div class='w3-panel w3-pale-red w3-leftbar w3-border-red'>";
        echo "<p>No seleccionaste ningún paso del menú.</p>";
        echo "</div>";
    }

    echo "<div class='w3-section w3-margin-top'>";
    echo "<a href='index.php' class='w3-button w3-block w3-dark-grey'>VOLVER AL MENÚ</a>";
    echo "</div>";

    echo "</div>";
    echo "</div>";
    ?>

</body>

</html>