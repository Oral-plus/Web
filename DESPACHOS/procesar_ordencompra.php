<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "despachos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if  (isset($_POST['submit_order'])) {
    $id_orden = $_POST['id_orden'];
    $proveedor = $_POST['proveedor'];
    $fecha_orden = $_POST['fecha_orden'];
    $telefono = $_POST['telefono'];
    $codigo_producto = $_POST['codigo_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $valor_unitario = $_POST['valor_unitario'];
    $cantidad = $_POST['cantidad'];
    $Cantidad_Recibida = $_POST['cantidad_recibida'];
    $nombre_proveedor = $_POST['nombre_proveedor'];
    // Calcular el valor total
    $valor_total = $valor_unitario * $cantidad;

    // Insertar la orden de compra
    $sqlInsertOrden = "INSERT INTO OrdenesDeCompra (IDOrden * 1000,  codigoProveedor, NombreProveedor, FechaOrden, Telefono * 1000,  codigoProducto, NombreProducto, ValorUnitario, Cantidad, ValorTotal, Cantidad_Recibida) VALUES ('$id_orden', '$proveedor', '$nombre_proveedor', '$fecha_orden', '$telefono', '$codigo_producto', '$nombre_producto', $valor_unitario, $cantidad, $valor_total, $Cantidad_Recibida)";
    
    if ($conn->query($sqlInsertOrden) === TRUE) {
        echo "Orden de compra registrada con éxito.";
    } else {
        echo "Error al registrar la orden: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>