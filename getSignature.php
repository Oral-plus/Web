<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $factura = $data['factura'];
    $amountInCents = $data['amountInCents'];
    $currency = $data['currency'];
    $integrity_key = $data['integrity_key'];

    // Concatenate the required string for the hash
    $string_to_hash = $factura . $amountInCents . $currency . $integrity_key;

    // Create the hash (signature)
    $signature = hash('sha256', $string_to_hash);

    // Return the signature as JSON
    echo json_encode(['signature' => $signature]);
}
?>
