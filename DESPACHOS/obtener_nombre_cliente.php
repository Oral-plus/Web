<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "despachos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$cliente_codigo = $_GET['cliente_codigo'];

$sql_select = "SELECT nombre FROM propietario WHERE doc='$cliente_codigo'";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombre_producto = $row['nombre'];
    echo $nombre_producto;
} else {
    echo "Cliente no encontrado";
}

$conn->close();
?>
