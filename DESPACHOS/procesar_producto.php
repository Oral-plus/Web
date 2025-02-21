<?php
$serverName = "MERCURY";
$connectionOptions = array(
    "Database" => "SKY_SAP",
    "UID" => "sa",
    "PWD" => "SAPB1Admin"
);

// Intenta establecer la conexión
$conexion = sqlsrv_connect($serverName, $connectionOptions);

if (!$conexion) {
    die("Error en la conexión a la base de datos: " . print_r(sqlsrv_errors(), true));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre_producto = $_POST['nombre_producto'];
    $vendedor = $_POST['vendedor'];
    $kam = $_POST['kam'];
    $ciudad = $_POST['ciudad'];
    $coach = $_POST['coach'];
    $fecha = $_POST['fecha'];

    // Construir la consulta SQL con parámetros
    $sql = "INSERT INTO imagenes (id, nombre_producto, vendedor, kam, ciudad, coach, fecha) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Preparar la consulta con parámetros
    $params = array($id, $nombre_producto, $vendedor, $kam, $ciudad, $coach, $fecha);
    $query = sqlsrv_query($conexion, $sql, $params);

    if ($query) {
        echo "Ingresado";
        exit(); // Terminar el script después de redirigir
    } else {
        echo "Error al ejecutar la consulta: " . print_r(sqlsrv_errors(), true);
    }
}

// Cerrar la conexión después de usarla
sqlsrv_close($conexion);
?>
