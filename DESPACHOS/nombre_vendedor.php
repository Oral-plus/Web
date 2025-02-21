<?php
$serverName = "MERCURY";
$connectionOptions = array(
    "Database" => "SKY_SAP",
    "UID" => "sa",
    "PWD" => "SAPB1Admin"
);

$id = $_GET['id'];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die("Conexión fallida: " . print_r(sqlsrv_errors(), true));
}

// Consultar el nombre del producto por su ID
$sql = "SELECT vendedor FROM productos WHERE id='$id'";
$query = sqlsrv_query($conn, $sql);

if ($query === false) {
    die("Error en la consulta: " . print_r(sqlsrv_errors(), true));
}

if (sqlsrv_has_rows($query)) {
    $row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    echo $row['vendedor'];
} else {
    echo 'Vendedor no encontrado';
}

sqlsrv_close($conn);
?>
