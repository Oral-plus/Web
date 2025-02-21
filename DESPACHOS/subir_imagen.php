<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "mi_base_de_datos");

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Obtener los valores de los campos
$id = $_POST['id'];
$nombre_producto = $_POST['nombre_producto'];
$vendedor = $_POST['vendedor'];
$kam = $_POST['kam'];
$ciudad = $_POST['ciudad'];
$coach = $_POST['coach'];
$fecha = $_POST['fecha'];

// Comprobar si se ha enviado una imagen
if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    $nombreImagen = $_FILES['imagen']['name'];
    $tipoImagen = $_FILES['imagen']['type'];
    $datosImagen = file_get_contents($_FILES['imagen']['tmp_name']);

    // Insertar la imagen y los datos en la base de datos
    $query = "INSERT INTO imagenes (nombre, tipo, datos, id, nombre_producto, vendedor, kam, ciudad, coach, fecha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $query);
    mysqli_stmt_bind_param($stmt, 'ssssssssss', $nombreImagen, $tipoImagen, $datosImagen, $id, $nombre_producto, $vendedor, $kam, $ciudad, $coach, $fecha);

    if (mysqli_stmt_execute($stmt)) {
        echo "La imagen y los datos se han subido correctamente.";
    } else {
        echo "Error al subir la imagen y los datos: " . mysqli_error($conexion);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error al subir la imagen.";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
