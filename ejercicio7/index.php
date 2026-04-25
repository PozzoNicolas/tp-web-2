<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Ejercicio 7</title>
</head>
<body class="w3-container w3-margin">
    <?php
    include_once "../includes1/header.php";
    include_once "../includes1/nav.php";
    echo "<h2>Ejercicio 7: Integrando PHP, HTML y CSS</h2>";
    ?>

<main class="w3-section">

    <section class="w3-panel w3-leftbar w3-border-blue w3-light-grey w3-padding-16">
        <h3 class="w3-text-blue">Ejercicio 1: Semáforo</h3>
        <p class="w3-small">
            Función <b>Semaforo</b> que devuelve el estado según el color ingresado.
        </p>

        <div class="w3-white w3-padding w3-border">
            <p><b>Prueba con color "rojo":</b></p>
            <ul class="w3-ul w3-border-0">
                <?php
                require_once "../ejercicio1/funciones.php";
                $color = "rojo";

                echo "<li><b class='w3-text-red'>A (if/else):</b> " . semaforo_a($color) . "</li>";
                echo "<li><b class='w3-text-orange'>B (inline):</b> " . semaforo_b($color) . "</li>";
                echo "<li><b class='w3-text-green'>C (switch):</b> " . semaforo_c($color) . "</li>";
                ?>
            </ul>
        </div>
    </section>

    <section class="w3-panel w3-leftbar w3-border-blue w3-light-grey w3-padding-16">
        <h3 class="w3-text-blue">Ejercicio 2: Binomio</h3>
        <p class="w3-small">
            Función <b>Binomio cuadrado perfecto</b> que realice dicha ecuación.
        </p>

        <div class="w3-white w3-padding w3-border">
            <p><b>Prueba con valores: 2 y 3.</b></p>
            <ul class="w3-ul w3-border-0">
                <?php
                require_once "../ejercicio2/funciones.php";
                $valorA = 2;
                $valorB = 3;
                echo "Método A (Suma y potencia): " . binomioCuadradoPerfecto_a($valorA, $valorB);
                echo "<br>";
                echo "Método B (Fórmula desarrollada): " . binomioCuadradoPerfecto_b($valorA, $valorB);
                ?>
            </ul>
        </div>
    </section>

    <section class="w3-panel w3-leftbar w3-border-blue w3-light-grey w3-padding-16">
        <h3 class="w3-text-blue">Ejercicio 3: Concatenar textos</h3>
        <p class="w3-small">
            Función <b>Concatenar textos</b> que reciba dos textos como parámetro y devuelva
            ambos concatenados como uno solo.
        </p>

        <div class="w3-white w3-padding w3-border">
            <p><b>Prueba con valores: "Mi nombre es: " y "Nicolás".</b></p>
            <ul class="w3-ul w3-border-0">
                <?php
                require_once "../ejercicio3/funciones.php";
                $texto1 = "Mi nombre es: ";
                $texto2 = "Nicolás!";
                echo "<p>" . concatenar($texto1, $texto2) . "</p>";
                ?>
            </ul>
        </div>
    </section>

    <section class="w3-panel w3-leftbar w3-border-blue w3-light-grey w3-padding-16">
        <h3 class="w3-text-blue">Ejercicio 4: Incrementar</h3>
        <p class="w3-small">
            Función <b>Incrementar</b> que reciba una variable y sin devolver nada como retorno de
            la función, el valor del parámetro haya sido incrementado en 1
            (Ver pasaje de parámetros por referencia).
        </p>

        <div class="w3-white w3-padding w3-border">
            <p><b>Prueba con valor numérico: 5.</b></p>
            <ul class="w3-ul w3-border-0">
                <?php
                require_once "../ejercicio4/funciones.php";
                $numeroAIncrementar = 5;
                echo "<p> Valor pre incremento: " . $numeroAIncrementar . "</p>";
                incrementar($numeroAIncrementar);
                echo "<p> Valor post incremento: " .$numeroAIncrementar. "</p>";
                ?>
            </ul>
        </div>
    </section>

    <section class="w3-panel w3-leftbar w3-border-blue w3-light-grey w3-padding-16">
        <h3 class="w3-text-blue">Ejercicio 5: Sumatoria</h3>
        <p class="w3-small">
            Función <b>Sumatoria</b> que reciba un vector cómo parámetro, y devuelva la suma de todos sus
            valores.
        </p>

        <div class="w3-white w3-padding w3-border">
            <p><b>Prueba con un vector de cuatro elementos.</b></p>
            <ul class="w3-ul w3-border-0">
                <?php
                require_once "../ejercicio5/funciones.php";
                $array = [10, 20, 30, 40];
                echo "<p>Elementos del array: ";
                for ($i=0; $i < count($array) ; $i++) {
                    echo $array[$i] . "; ";
                }
                echo "</p>";
                echo "<p>Suma con For: " . sumatoria_a($array) . "</p>";
                echo "<p>Suma con For each: " . sumatoria_b($array) . "</p>";
                echo "<p>Suma con While: " . sumatoria_c($array) . "</p>";
                ?>
            </ul>
        </div>
    </section>

    <section class="w3-panel w3-leftbar w3-border-blue w3-light-grey w3-padding-16">
        <h3 class="w3-text-blue">Ejercicio 6: Nombre completo</h3>
        <p class="w3-small">
            Función <b>Nombre completo:</b> crear una clase llamada Saludar, la misma tendrá un constructor que
            reciba nombre y apellido de una persona.<br>
            Dicha clase debe implementar el método saludoFormal y saludoInformal, ambos recibiendo como parámetro un horario.
        </p>

        <div class="w3-white w3-padding w3-border">
            <p><b>Prueba saludo formal e informal enviando 9hs.</b></p>
            <ul class="w3-ul w3-border-0">
                <?php
                require_once "../ejercicio6/saludar.php";
                $nombre = "Nicolas";
                $apellido = "Pozzo";
                $nuevoSaludo = new Saludar($nombre, $apellido);
                $horario = "9:30";
                $horarioEntero = (int)$horario;
                echo "<p><strong>Saludo Formal:</strong> " . $nuevoSaludo->saludoFormal($horarioEntero) . "</p>";
                echo "<p><strong>Saludo Informal:</strong> " . $nuevoSaludo->saludoInformal($horarioEntero) . "</p>";
                ?>
            </ul>
        </div>
    </section>
</main>
</body>
</html>