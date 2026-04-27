<?php
if (isset($_FILES['imagen_nueva']) && $_FILES['imagen_nueva']['error'] === 0){

    //guardo el nuevo nombre de la imagen, ingresada por el usuario desde el form
    $formatearNombre = $_POST['nombre_personalizado'];

    //guardo la extension de la imagen porque para concatenarle, luego, al nombre nuevo
    $extension = pathinfo($_FILES['imagen_nueva']['name'], PATHINFO_EXTENSION);

    //le asigno a la imagen si nuevo nombre y el formato
    $nombreArchivoFinal = $formatearNombre . "." . $extension;

    //donde se almacena cuando la carga el usuario
    $origen = $_FILES['imagen_nueva']['tmp_name'];

    //donde la voy a querer almacenar finalmente
    $destino = "../imagenes/" . $nombreArchivoFinal;
    
    //si se puedo mover la imagen desde el origen al destino, recargo la página y se carga la nueva imagen.
    if(move_uploaded_file($origen, $destino)){
        /*HTTP_REFERER es la URL de la página anterior (para poder reutilizar el cod en el ejercicio 9 y 10 y que
        redireccione desde donde lo llamo.*/
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }else{
        echo "Hubo un error con el archivo o no seleccionaste ninguno.";
    }
}