<?php
$id = $_GET['id'];

$conexion = new mysqli("localhost", "root", "", "aldea_vikinga");

$sql = "SELECT * FROM guerreros WHERE id=$id";

$resultado = $conexion->query($sql);

$vikingo = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Guerrero</title>
</head>
<body>
<h1>Editar a <?php echo $vikingo['nombre']; ?></h1>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $vikingo['id']; ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $vikingo['nombre']; ?>">

    <label>Apodo:</label>
    <input type="text" name="apodo" value="<?php echo $vikingo['apodo']; ?>">

    <label>Clan:</label>
    <input type="text" name="clan" value="<?php echo $vikingo['clan']; ?>">

    <label>Fuerza:</label>
    <input type="number" name="fuerza" value="<?php echo $vikingo['fuerza']; ?>">

    <button type="submit">Guardar Cambios</button>
</form>
</body>
</html>
<?php
$conexion->close();
