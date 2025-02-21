<?php
// Incluir las credenciales de conexión
require_once '../obt.php';

// Conexión al servidor
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Verifica la conexión
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$cedula = $_GET['cedula'];

// Verifica si se recibió la cédula
if (!$cedula) {
    die(json_encode(['error' => 'Cédula no proporcionada']));
}

// Consulta para obtener el nombre, dirección y teléfono
$sql = "SELECT T0.[CardName], T0.[Address], T0.[Phone1], T0.E_Mail FROM OCRD T0
        INNER JOIN OCRG T1 ON T0.[GroupCode] = T1.[GroupCode]
         INNER JOIN dbo.[@DISTRIBUCION]  T2 ON T0.U_CANAL_DISTRIBUCION = T2.Code

        WHERE CardCode = ? AND T1.[GroupName] <> 'Droguerias Cadenas' 
        AND T1.[GroupName] <> 'Canal Grandes Superf' AND 
        T2.Name <> 'HARD DISCOUNT NACIONALES' AND T2.Name <> 'HARD DISCOUNT INDEPENDIENTES'";

$params = array($cedula);

// Preparar y ejecutar la consulta
$stmt = sqlsrv_query($conn, $sql, $params);

// Verifica si la consulta fue exitosa
if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Obtener los resultados
$data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

// Verifica si se encontraron datos
if (!$data) {
    echo json_encode(['No se encontraron datos para la cédula proporcionada']);
} else {
    // Retornar datos como JSON
    header('Content-Type: application/json');
    echo json_encode($data);
}

// Cerrar la conexión
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
