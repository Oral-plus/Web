<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "mi_base_de_datos");

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Obtener el ID de la imagen desde la URL
$idImagen = $_GET['id'];

// Consulta para obtener los datos de la imagen
$consulta = "SELECT nombre, tipo, datos FROM imagenes WHERE id = ?";
$stmt = mysqli_prepare($conexion, $consulta);
mysqli_stmt_bind_param($stmt, 'i', $idImagen);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $nombreImagen, $tipoImagen, $datosImagen);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);

// Mostrar la imagen
header("Content-type: $tipoImagen");
header("Content-Disposition: inline; filename=$nombreImagen");
echo $datosImagen;

// Cerrar la conexión
mysqli_close($conexion);
?>
