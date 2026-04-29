<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apodo  = $_POST['apodo'];
$clan   = $_POST['clan'];
$fuerza = $_POST['fuerza'];

$conexion = new mysqli("localhost", "root", "", "aldea_vikinga");

$sql = "UPDATE guerreros SET 
        nombre = '$nombre', 
        apodo = '$apodo', 
        clan = '$clan', 
        fuerza = $fuerza 
        WHERE id = $id";

$conexion->query($sql);

$conexion->close();
header('location: index.php');
exit();