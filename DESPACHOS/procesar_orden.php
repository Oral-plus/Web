<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "despachos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$id = $_POST['id'];
$codigo_cliente = $_POST['codigo'];
$fecha = $_POST['fecha'];
$nombre_cliente = $_POST['nombre_cliente'];
$observacion = $_POST['observacion'];
$producto_id = $_POST['producto_id'];
$nombre_producto = $_POST['nombre_producto'];
$cantidad = $_POST['cantidad'];
$correciones = $_POST['correciones'];
// Check if the order already exists
$sql_select_orden = "SELECT * FROM ordenes WHERE id='$id'";
$result_orden = $conn->query($sql_select_orden);

if ($result_orden->num_rows > 0) {
    echo "La orden ya existe.";
} else {
    // Iterate over each product in the form
    $total_productos = count($producto_id);
    $productos_no_encontrados = [];

    for ($i = 0; $i < $total_productos; $i++) {
        $producto_actual_id = $producto_id[$i];

        // Realiza la consulta SQL para el producto actual
        $sql_select_producto = "SELECT cantidad_en_inventario FROM productos WHERE id='$producto_actual_id'";
        $result_producto = $conn->query($sql_select_producto);

        if ($result_producto->num_rows > 0) {
            $row_producto = $result_producto->fetch_assoc();
            $cantidad_en_inventario = intval($row_producto['cantidad_en_inventario']);
            $cantidad_actual = intval($cantidad[$i]);

            if ($cantidad_en_inventario >= $cantidad_actual) {
                // Update the inventory
                $nueva_cantidad = $cantidad_en_inventario - $cantidad_actual;
                $sql_update_inventario = "UPDATE productos SET cantidad_en_inventario='$nueva_cantidad' WHERE id='$producto_actual_id'";
                $conn->query($sql_update_inventario);

                // Insert the new order into "ordenes"
                $sql_insert_orden = "INSERT INTO ordenes (id * 1000,  codigo_cliente, fecha, nombre_cliente, observacion,correciones) VALUES ('$id', '$codigo_cliente', '$fecha', '$nombre_cliente', '$observacion', '$correciones')";
                if ($conn->query($sql_insert_orden) === TRUE) {
                    // Insert the corresponding product into "ordenes_articulos"
                    $sql_insert_articulo = "INSERT INTO ordenes_articulos (idorden, id_producto, nombre_producto, cantidad) VALUES ('$id', '$producto_actual_id', '$nombre_producto[$i]', '$cantidad_actual')";
                    if (!$conn->query($sql_insert_articulo)) {
                        echo "Error al ingresar la orden en 'ordenes_articulos': " . $conn->error;
                    }
                } else {
                    echo "Error al ingresar la orden en 'ordenes': " . $conn->error;
                }
            } else {
                echo "No hay suficiente cantidad en inventario para el producto con ID $producto_actual_id.";
            }
        } else {
            // Guarda los productos no encontrados
            $productos_no_encontrados[] = $producto_actual_id;
        }
    }

    // Muestra los productos no encontrados
    if (!empty($productos_no_encontrados)) {
        echo "Productos no encontrados: " . implode(', ', $productos_no_encontrados);
    } else {
        echo "Orden ingresada correctamente.";
    }
}

$conn->close();
?>
