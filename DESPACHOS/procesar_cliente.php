<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "despachos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$accion = $_POST['accion'];
// Obtener los datos del formulario
$codigo = $_POST['codigo'];

if ($accion === 'Consultar') {
    $sql = "SELECT * FROM clientes WHERE codigo = '$codigo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre = $row['nombre'];
        $nit = $row['nit'];
        $telefono = $row['telefono'];
        $direccion = $row['direccion'];
        $ciudad = $row['ciudad'];
        $barrio = $row['barrio'];
        $correo = $row['correo'];
        $comentarios = $row['comentarios'];
    } else {
        // Si el cliente no se encuentra, se inicializan los campos en blanco
        $nombre = $nit = $telefono = $direccion = $ciudad = $barrio = $correo = $comentarios = "";
    }
}

// Insertar o actualizar el cliente en la base de datos
if ($accion === 'Ingresar/Actualizar') {
    $nombre = $_POST['nombre'];
    $nit = $_POST['nit'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $barrio = $_POST['barrio'];
    $correo = $_POST['correo'];
    $comentarios = $_POST['comentarios'];

    $sql = "INSERT INTO clientes (codigo, nombre, nit, telefono, direccion, ciudad, barrio, correo, comentarios)
            VALUES ('$codigo', '$nombre', '$nit', '$telefono', '$direccion', '$ciudad', '$barrio', '$correo', '$comentarios')
            ON DUPLICATE KEY UPDATE
            nombre = '$nombre', nit = '$nit', telefono = '$telefono', direccion = '$direccion', ciudad = '$ciudad', barrio = '$barrio', correo = '$correo', comentarios = '$comentarios'";

    if ($conn->query($sql) === TRUE) {
        echo "Cliente ingresado/actualizado exitosamente.";
    } else {
        echo "Error al ingresar/actualizar el cliente: " . $conn->error;
    }
}

$conn->close();
?>
