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

    $n = intval($_POST['tamanio']); //intvale 
    $matriz = [];
    $contenido = 1;

    //Completo la matriz
    for ($i = 0; $i < $n; $i++) {
        $matriz[$i] = []; // Declaro que en la posicion $i meto un array

        for ($b = 0; $b < $n; $b++) {
            $matriz[$i][$b] = $contenido; // apunto al array $i en la posicion $b y guardo el $contenido. 
            $contenido++;
        }
    };
    //Muestro lo que pide el enunciado
    //A) Mostrar elementos de la diagonal principal:
    echo "<div class='w3-content' style='max-width: 500px; margin-top: 50px;'>";
    echo "<h3 class='w3-center'><b>Diagonal principal:</b></h3>";

    echo "<div style='display:flex; flex-direction:row; justify-content:center; gap:10px;'>";

    for ($i = 0; $i < $n; $i++) {
        
        echo "<div class='w3-card w3-light-grey w3-padding' style='min-width:50px; text-align:center;'>";
        echo $matriz[$i][$i];
        echo "</div>";
    }
    echo "</div>";
    echo "</div>";

    //b) Mostrar elementos de la diagonal secundaria:
    echo "<div class='w3-content' style='max-width: 500px; margin-top: 50px;'>";
    echo "<h3 class='w3-center'><b>Diagonal secundaria:</b></h3>";

    echo "<div style='display:flex; flex-direction:row; justify-content:center; gap:10px;'>";
    $a = count($matriz) - 1; // tmb podria usar $n que es el tamaño que el usuario le asigna a la matriz
    for ($i = 0; $i < $n; $i++) {
        
        echo "<div class='w3-card w3-light-grey w3-padding' style='min-width:50px; text-align:center;'>";
        echo $matriz[$i][$a--];
        echo "</div>";
    }
    echo "</div>";
    echo "</div>";

    //c) Mostrar la suma de todos los los valores que contiene la matriz:
    echo "<div class='w3-content' style='max-width: 500px; margin-top: 50px;'>";
    echo "<h3 class='w3-center'><b>Suma total de los elementos:</b></h3>";

    echo "<div style='display:flex; flex-direction:row; justify-content:center; gap:10px;'>";
    $total = 0;
    for ($i = 0; $i < $n; $i++) {

        for ($y=0; $y < $n; $y++) { 
            $total += $matriz[$i][$y];
        }
    }
    echo "<div class='w3-card w3-light-grey w3-padding' style='min-width:50px; text-align:center;'>";
    echo $total;
    echo "</div>";
    echo "</div>";
    echo "</div>";
    /*echo "<pre>";
    print_r($matriz);
    echo "</pre>";*/
    ?>