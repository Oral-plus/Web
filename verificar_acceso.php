<?php
// Datos de conexión a SQL Server
$serverName = "192.168.2.244"; // Cambia esto si es necesario
$database = "RBOSKY3";
$username = "sa"; // Reemplaza con tu usuario
$password = "Sky2022*!"; // Reemplaza con tu contraseña

// Obtener el código de acceso enviado
$codigo = $_GET['codigo'] ?? '';

// Conexión a SQL Server
try {
    $connectionInfo = array(
        "Database" => $database,
        "UID" => $username,
        "PWD" => $password,
        "CharacterSet" => "UTF-8",
        "TrustServerCertificate" => "Yes"  // Agregar esta línea para deshabilitar la verificación SSL
    );
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    if ($conn === false) {
        // Muestra el error específico de conexión
        die(json_encode(["acceso" => false, "mensaje" => "Error de conexión a la base de datos: " . print_r(sqlsrv_errors(), true)]));
    }

    // Consulta para verificar el código en la tabla OCRD
    $sql = "SELECT COUNT(*) AS total FROM OCRD T0 
            INNER JOIN OCRG T1 ON T0.[GroupCode] = T1.[GroupCode]
              INNER JOIN dbo.[@DISTRIBUCION]  T2 ON T0.U_CANAL_DISTRIBUCION = T2.Code
            WHERE CardCode = ? 
            AND T1.[GroupName] <> 'Droguerias Cadenas' 
            AND T1.[GroupName] <> 'Canal Grandes Superf'
             AND  T2.Name <> 'HARD DISCOUNT NACIONALES'
              AND T2.Name <> 'HARD DISCOUNT INDEPENDIENTES'";
    $params = array($codigo);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        // Muestra el error específico de la consulta SQL
        die(json_encode(["acceso" => false, "mensaje" => "Error en la consulta SQL: " . print_r(sqlsrv_errors(), true)]));
    }

    $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

    // Verifica si se encontró el código
    if ($row['total'] > 0) {
        echo json_encode(["acceso" => true]);
    } else {
        echo json_encode(["acceso" => false, "mensaje" => "No tienes permiso para ver esta página."]);
    }

    // Cierra la conexión y la consulta
    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);

} catch (Exception $e) {
    echo json_encode(["acceso" => false, "mensaje" => "Ocurrió un error: " . $e->getMessage()]);
}
?>
