<?php
session_start();

// Elimina todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirige a la página de inicio de sesión
header("Location: ingreso.php");
?>
