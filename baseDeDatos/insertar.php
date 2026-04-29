<?php
$nombre = $_POST['nombre'];
$apodo  = $_POST['apodo'];
$clan   = $_POST['clan'];
$fuerza = $_POST['fuerza'];

$conexion = new mysqli("localhost", "root", "", "aldea_vikinga");

$sql = "INSERT INTO guerreros (nombre, apodo, clan, fuerza) 
        VALUES ('$nombre', '$apodo', '$clan', $fuerza)";

$conexion->query($sql);

$conexion->close();

header('location: index.php');
exit();
