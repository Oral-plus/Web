<?php
// Conexión a la base de datos (reemplaza con tus propios detalles de conexión)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "despachos";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$codigo_producto = $_GET['codigo_producto'];


$sql_select = "SELECT nombre_producto FROM productos WHERE id='$codigo_producto'";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombre_producto = $row['nombre_producto'];
    echo $nombre_producto;
} else {
    echo "Producto no encontrado";
}





$conn->close();
?>
