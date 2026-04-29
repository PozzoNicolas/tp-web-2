<?php
$id = $_GET['id'];

$conexion = new mysqli("localhost", "root", "", "aldea_vikinga");

$statement = $conexion->prepare("DELETE FROM guerreros WHERE id = ?");

$statement->bind_param("i", $id);

$statement->execute();

$statement->close();
$conexion->close();

header('location: index.php');
exit();
