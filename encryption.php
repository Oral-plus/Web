<?php
function encrypt($string, $key) {
    $cipher = 'aes-256-cbc';
    $ivLength = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivLength);
    $encrypted = openssl_encrypt($string, $cipher, $key, OPENSSL_RAW_DATA, $iv);
    $encryptedString = base64_encode($iv . $encrypted);
    return $encryptedString;
}

function decrypt($encryptedString, $key) {
    $cipher = 'aes-256-cbc';
    $encryptedData = base64_decode($encryptedString);
    $ivLength = openssl_cipher_iv_length($cipher);
    $iv = substr($encryptedData, 0, $ivLength);
    $encryptedPayload = substr($encryptedData, $ivLength);
    $decrypted = openssl_decrypt($encryptedPayload, $cipher, $key, OPENSSL_RAW_DATA, $iv);
    return $decrypted;
}
?>
