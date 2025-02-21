

<?php
session_start();
$servername = "bl2cynevgkon6hn3fayj-mysql.services.clever-cloud.com";
$username = "uh5ozp4c4xnhfo0k";
$password = "fBTQDtAfkO5IiIsDP82Z";
$dbname = "bl2cynevgkon6hn3fayj";

// Conecta a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtiene las credenciales del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta la base de datos para verificar las credenciales
$sql = "SELECT Id, Nombre FROM insertar_usu WHERE Nombre = '$username' AND Pass = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Inicio de sesión exitoso
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row['Id'];
    $_SESSION['username'] = $row['Nombre'];
    header("Location: cliente.php"); // Redirige a la página protegida
} else {
    // Credenciales incorrectas, redirige de nuevo a la página de inicio de sesión
    header("Location: ingreso.php?error=1");
}

$conn->close();
?>
