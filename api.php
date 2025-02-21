<?php

// Configuración del servidor SAP
$baseUrl = "https://192.168.2.242:50000/b1s/v1";
$username = "MANAGER";
$password = "SKY0303";
$companyDB = "RBOSKY3";

// Función para iniciar sesión en SAP
function iniciarSesionSAP($baseUrl, $username, $password, $companyDB) {
    $loginData = [
        "UserName" => $username,
        "Password" => $password,
        "CompanyDB" => $companyDB
    ];
    $cedula = $datos['cedula'];


    $ch = curl_init("$baseUrl/Login");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($loginData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Ignorar verificación SSL
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($httpCode != 200) {
        die("Error al iniciar sesión: " . curl_error($ch) . " - Respuesta: " . $response);
    }

    $sessionData = json_decode($response, true);
    curl_close($ch);
    return $sessionData["SessionId"] ?? null;
}

// Función para crear la orden de compra
function crearOrdenSAP($baseUrl, $sessionId) {
    $orderData = [
        "CardCode" => "$cedula",
        "DocDueDate" => "2025-02-11",
        "DocumentLines" => [
            ["ItemCode" => $codigo, "Quantity" => $cantidad]
        ]
    ];

    $ch = curl_init("$baseUrl/Orders");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($orderData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        "Cookie: B1SESSION=$sessionId"
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Ignorar verificación SSL
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode == 201) {
        echo "Orden creada exitosamente: " . $response;
    } else {
        echo "Error al crear la orden: " . curl_error($ch) . " - Respuesta: " . $response;
    }
}

// Ejecutar procesos
$sessionId = iniciarSesionSAP($baseUrl, $username, $password, $companyDB);
if ($sessionId) {
    crearOrdenSAP($baseUrl, $sessionId);
} else {
    echo "No se pudo iniciar sesión en SAP.";
}

?>
