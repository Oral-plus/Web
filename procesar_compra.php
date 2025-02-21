<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

// Configuración del servidor SAP
$baseUrl = "https://192.168.2.242:50000/b1s/v1";
$username = "MANAGER";
$password = "SKY0303";
$companyDB = "PRUEBA";

// Obtener los datos del JSON enviado
$data = file_get_contents("php://input");
$datosCompra = json_decode($data, true);

if (!$datosCompra) {
    echo json_encode(["success" => false, "message" => "Datos no recibidos correctamente"]);
    exit;
}

$cedula = $datosCompra['cedula'] ?? '';
$nombre = $datosCompra['nombre'] ?? '';
$direccion = $datosCompra['direccion'] ?? '';
$telefono = $datosCompra['telefono'] ?? '';
$correo = $datosCompra['correo'] ?? '';
$productos = $datosCompra['productos'] ?? [];
$subtotal = $datosCompra['subtotal'] ?? 0;

function iniciarSesionSAP($baseUrl, $username, $password, $companyDB) {
    $loginData = [
        "UserName" => $username,
        "Password" => $password,
        "CompanyDB" => $companyDB
    ];

    $ch = curl_init("$baseUrl/Login");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($loginData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode != 200) {
        return null;
    }

    $sessionData = json_decode($response, true);
    return $sessionData["SessionId"] ?? null;
}

function crearOrdenSAP($baseUrl, $sessionId, $cedula, $productos) {
    $documentLines = [];
    foreach ($productos as $producto) {
        $documentLines[] = [
            "ItemCode" => $producto['codigo'],
            "Quantity" => $producto['cantidad'],
            "DiscountPercent" => 3,
              "TaxCode" => "IVAG01"

        ];
    }

    $orderData = [
        "CardCode" => $cedula,
        "DocDueDate" => date('Y-m-d'),
        "DocumentLines" => $documentLines,  
         "U_PAGINAWEB" => 'PAGINAWEB'
    ];

    $ch = curl_init("$baseUrl/Orders");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($orderData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        "Cookie: B1SESSION=$sessionId"
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return ($httpCode == 201) ? ["success" => true, "message" => "Gracias por tu compra. Tu apoyo nos impulsa hacia un mejor futuro,te enviamos un correo con la orden."] : ["success" => false, "message" => "Error al crear la orden: $response"];
}

function enviarCorreo($correo, $nombre, $telefono, $direccion, $subtotal) {
  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'formularioretiro@gmail.com';
  $mail->Password = 'dqho djgx yzlu llby';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  $mail->setFrom('formularioretiro@gmail.com', 'Oral-plus, compras');
  $mail->addAddress($correo, $nombre);
  $mail->CharSet = 'UTF-8';
  $mail->isHTML(true);
  $mail->Subject = 'Confirmación de compra para ' . $nombre;

  // Agregar las imágenes embebidas
  // Asegúrate de que las rutas sean correctas según tu estructura de directorios
  $mail->addEmbeddedImage('ruta/a/tu/logo.png', 'logo', 'logo.png');
  $mail->addEmbeddedImage('ruta/a/tu/facebook.png', 'facebook', 'facebook.png');
  $mail->addEmbeddedImage('ruta/a/tu/instagram.png', 'instagram', 'instagram.png');
  $mail->addEmbeddedImage('ruta/a/tu/tiktok.png', 'tiktok', 'tiktok.png');

  $mail->Body = "
    
  <div style='background-color:#f7f7f7;'>


   <div style='background-color:#fff; max-width: 600px;
border: 1px solid #d9d9d9;
display: block;
margin: auto;'>
   <img src='cid:logo' alt='Logo de Oral-Plus' style='width:600px; height:500px; display: block; margin: auto;'>
     

   <h2 style='padding: 20px 20px;
font-family: Helvetica, serif, EmojiFont;'>Hola, {$nombre},</h2>

      <h3  style='padding: 20px 20px;
font-family: Helvetica, serif, EmojiFont;'  >
    Recibimos la compra que realizastes desde nuestra pagina web.
      </h3>

    <p  style='font-size: 18px;
line-height: 150%;
text-align: left;
color: rgb(17, 17, 17);
padding: 20px 20px;
font-family: Helvetica,serif,EmojiFont;'>
Con Oral-Plus, cuidamos de tu salud bucal para que tú puedas seguir creando recuerdos inolvidables
      </p>

      <h4  style='font-family: Helvetica, serif, EmojiFont;
font-size: 18px;
line-height: 150%;
text-align: left;
color: rgb(17, 17, 17) !important;
padding: 20px 20px;'>
Estos son los detalles de tu compra
      </h4>

    <div   style='font-family: Helvetica, serif, EmojiFont;
line-height: 150%;
padding: 24px 24px 24px;
background-color: #f7f7f7;
font-weight: bold;
font-size: 20px;
color: #111111;
text-align: justify;
display: block;
margin: 25px;'>


<h3 style='font-family: Helvetica, serif, EmojiFont;
font-size: 20px;
line-height: 150%;
text-align: left;
color: rgb(17, 17, 17) !important;
padding: 0px 20px 0px;'>
Tu compra fue de:<span style='display: grid;'>$subtotal </span></h3>

          </div>

   <h4  style='font-family: Helvetica, serif, EmojiFont;
font-size: 18px;
line-height: 150%;
text-align: left;
color: rgb(17, 17, 17) !important;
padding: 20px 0px 0px 20px;'>
Paga tu factura
      </h4>

   <p  style='font-size: 18px;
line-height: 150%;
text-align: left;
color: rgb(17, 17, 17);
padding-left: 20px;
font-family: Helvetica,serif,EmojiFont;'>
Una vez hayas recibido tu pedido, podrás pagar tu factura en el siguiente enlace: 
<a href='https://oral-plus.com/registro.php'>https://oral-plus.com/registro.php</a>
</p>


<p  style='font-size: 18px;
line-height: 150%;
text-align: left;
color: rgb(17, 17, 17);
padding-left: 20px;
font-family: Helvetica,serif,EmojiFont;'>
Gracias por tu compra

</p>


<div style=' background-color: #000;' > 

<div style=' padding: 40px 0px 10px 25px;' > 

<a href='https://www.facebook.com/oralpluscol/'  >
<img src='cid:facebook' alt='facebook de Oral-Plus' style='width: 43px;
height: auto;
cursor: pointer;
min-height: auto;
min-width: auto;'></a>

<a href='https://www.instagram.com/oralplus_colombia/' >
<img src='cid:instagram' alt='facebook de Oral-Plus' style='width: 43px;
height: auto;
cursor: pointer;
min-height: auto;
min-width: auto;'></a>

  <a href='https://www.tiktok.com/@oralpluscol?_t=8qcaY6Yta9V&_r=1'>
<img src='cid:tiktok' alt='tiktok de Oral-Plus' style='width: 43px;
height: auto;
cursor: pointer;
min-height: auto;
min-width: auto;'></a>

<p  style='font-size: 18px;
line-height: 150%;
text-align: left;
color: #FFF;
padding-TOP: 20px;
font-family: Helvetica,serif,EmojiFont;'>


Si tienes alguna duda,presiona el boton agregar consulta y uno de nuestros asesores te atendera  o escríbenos al correo sistemas@oral-plus.com


</p>


<p  style='font-size: 18px;
line-height: 150%;
text-align: left;
color: #FFF;
padding-TOP: 20px;
font-family: Helvetica,serif,EmojiFont;'>

puedes llamarnos al  (+57) 300 912 1246.

</p>

   <a href='https://oral-plus.com/politica.html'>
    <p  style='font-size: 18px;
line-height: 150%;
text-align: left;
color: #FFF;
padding-TOP: 20px;
padding-bottom: 20px;
font-family: Helvetica,serif,EmojiFont;'>

Politica y privacidad

</p></a>


</div>
</div>

      </div>

         

      
  
</div>
       <div>
  ";
  $mail->AddEmbeddedImage('imginicio/SONRISACORREO.jpg', 'logo');
  $mail->AddEmbeddedImage('imginicio/facebook2.png', 'facebook');
  $mail->AddEmbeddedImage('imginicio/instagram2.png', 'instagram');
  $mail->AddEmbeddedImage('imginicio/tiktok.png', 'tiktok');
  
  // Intentar enviar el correo
  return $mail->send();
}

$sessionId = iniciarSesionSAP($baseUrl, $username, $password, $companyDB);
if (!$sessionId) {
    echo json_encode(["success" => false, "message" => "No se pudo iniciar sesión en SAP"]);
    exit;
}

$resultadoOrden = crearOrdenSAP($baseUrl, $sessionId, $cedula, $productos);

if ($resultadoOrden['success']) {
    enviarCorreo($correo, $nombre, $telefono, $direccion, $subtotal);
}

echo json_encode($resultadoOrden);
?>