<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORAL-PLUS</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="registro.css">
<style>
      /* Estilos del modal */
      .modal {
            display: none; /* Oculto por defecto */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente */
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 300px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

body {
  background-color: #ffffff;
  font-family: Arial, sans-serif;
  text-align: center;

}

.form-container {
  display: flex;
  flex-direction: column;
  align-items: center;

}

.form-container label {
  margin-bottom: 10px;
}

.form-container input[type="text"] {
  padding: 5px;
  margin-bottom: 10px;
}

.form-container button {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
}
input[type="button"] {
    position: absolute;
    top: 85%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #ffffff;
    font-size: 15px;
    font-family: Arial, sans-serif;
    text-align: center;
    border: none;
 color: #fff;
 background-image: linear-gradient(30deg, #0400ff, #4ce3f7);
 border-radius: 20px;
 background-size: 100% auto;
 font-family: inherit;
 font-size: 17px;
 padding: 0.6em 1.5em;
 cursor: pointer;
}
input[type="button"]:hover {
 background-position: right center;
 background-size: 200% auto;
 -webkit-animation: pulse 2s infinite;
 animation: pulse512 1.5s infinite;
}

table {
            width: 100%;
            border-collapse: collapse;

        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
  
         
        }
        th {
           
            background-color: #e6efe0; /* Color de fondo del botón */
        }
        .table-container {
            width: 100%; /* Ajusta el ancho del contenedor */
            max-width: 100%; /* Limita el ancho máximo al 100% del contenedor padre */
            overflow-x: auto; /* Agrega desplazamiento horizontal si es necesario */
            border: 1px solid #ccc; /* Bordes del contenedor */
            padding: 10px; /* Espacio alrededor de la tabla */
            box-sizing: border-box; /* Asegura que el padding no afecte el ancho */
        }

        #waybox-button {
    display: inline-block;
    height: 40px;
    line-height: 40px;
    background-color: rgb(26, 69, 148);
    border: 0px;
    border-radius: 4px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-weight: 400;
    font-size: 14px;
    padding: 0px 16px;
    color: white;
    cursor: pointer;
    -webkit-font-smoothing: subpixel-antialiased;
}

#modalInput {
    display: inline-block;
    height: 25px;
 
}

.modalInput {
    display: inline-block;
    height: 30px;
 
}


.container {
  position: relative;
  width: 100%; /* Ajusta el tamaño según tus necesidades */
}

img.fondo {
    width: 100%;
}

.texto-encima {
  position: absolute;
  top: 20%;  /* Centra verticalmente */
  left: 50%; /* Centra horizontalmente */
  transform: translate(-50%, -50%);
  color: black; /* Cambia el color del texto */
  font-size: 35px;
  font-weight: bold;
  text-align: center;
}
.texto-encima2 {
  position: absolute;
  top: 37%;  /* Centra verticalmente */
  left: 50%; /* Centra horizontalmente */
  transform: translate(-50%, -50%);
  color: black; /* Cambia el color del texto */
  font-size: 23px;
  font-family: Arial, sans-serif;
  text-align: center;
}
.texto-encima3 {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 280px;
    transform: translate(-50%, -50%);
    color: black;
    font-size: 19px;
    font-family: Arial, sans-serif;
    text-align: center;
    border-radius: 15px;
}

.texto-encima4 {
    position: absolute;
    top: 67%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #ffffff;
    font-size: 15px;
    font-family: Arial, sans-serif;
    text-align: center;
}

.texto-encima5 {
    position: absolute;
    top: 85%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #ffffff;
    font-size: 15px;
    font-family: Arial, sans-serif;
    text-align: center;
}

.fondo2{
  display:none;
}
@media screen and (max-width:800px) {

    .fondo2{
            display: block;
            width: 100%;
        }
        .fondo{
            display:none;
        }
        img.fondo {
            display:none;
}

        .texto-encima {
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    font-size: 25px;
    font-weight: bold;
    text-align: center;
}

.texto-encima2 {
  position: absolute;
  top: 40%;  /* Centra verticalmente */
  left: 50%; /* Centra horizontalmente */
  transform: translate(-50%, -50%);
  color: black; /* Cambia el color del texto */
  font-size: 20px;
  font-family: Arial, sans-serif;
  text-align: center;
}
.texto-encima3 {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 230px;
    transform: translate(-50%, -50%);
    color: black;
    font-size: 19px;
    font-family: Arial, sans-serif;
    text-align: center;
    border-radius: 15px;
}
.texto-encima4 {
    position: absolute;
    top: 64%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #ffffff;
    font-size: 15px;
    font-family: Arial, sans-serif;
    text-align: center;
}
input[type="button"] {
 
    top: 77%;
 
}
}
/* From Uiverse.io by niat786 */ 
button {
 border: none;
 color: #fff;
 background-image: linear-gradient(30deg, #0400ff, #4ce3f7);
 border-radius: 20px;
 background-size: 100% auto;
 font-family: inherit;
 font-size: 17px;
 padding: 0.6em 1.5em;
}

button:hover {
 background-position: right center;
 background-size: 200% auto;
 -webkit-animation: pulse 2s infinite;
 animation: pulse512 1.5s infinite;
}

@keyframes pulse512 {
 0% {
  box-shadow: 0 0 0 0 #05bada66;
 }

 70% {
  box-shadow: 0 0 0 10px rgb(218 103 68 / 0%);
 }

 100% {
  box-shadow: 0 0 0 0 rgb(218 103 68 / 0%);
 }
}

</style>
 <link rel="icon" type="image/x-icon" href="imginicio/logobusqueda.jpg">
<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X2F3Z0336Z"></script>
    
    <!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X2F3Z0336Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-X2F3Z0336Z');
</script> <style>
  #portal {
    display: none;
}
@media screen and (max-width:800px) 
    {
         #portal {
    display: block;
}


}

</style>

</head>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <!-- <div class="container">
<img class="fondo" src="imginicio/wallpa.jpg" alt="Descripción de la imagen" class="imagen">
 <img class="fondo2" src="imginicio/Banner2vertical.jpg" alt="Descripción de la imagen" class="imagen">
  <div class="texto-encima">Estado de cartera</div>
  <div class="texto-encima2">Ingrese el codigo</div>
  <input class="texto-encima3" type="text"  name="CardCode" id="CardCode"  required>
  <button class="texto-encima4" type="submit">Consultar</button> 
  <a href="https://wa.me/send?text=Hola, este es el comprobante de pago&phone=573009121246"> 
     <input class="texto-encima5" type="button" value="Enviar Comprobante de pago aqui"></a> 
  
</div>-->
<img class="fondo2" src="imginicio/Beneficios.jpg" alt="Descripci�n de la imagen" class="imagen">
    
    <div class="form-container">
    <img src="https://oral-plus.com/imginicio/logosas.png" alt="">
    <h2>Estado de cartera</h2>
        <label for="CardCode">Ingrese el codigo:</label>
        <input type="text"  name="CardCode" id="CardCode"  required>
        <button type="submit">Consultar</button> 
        <br>  
        <a href="https://wa.me/send?text=Hola, este es el comprobante de pago&phone=573218290212"> 
            <input type="button" value="Enviar Comprobante de pago aqui"></a> 
 </div>
  
    </form>

    <?php

    
define('BASEPATH', true);

require_once '../database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $conn = connectToDatabase();

        // Validar y sanitizar el valor ingresado en CardCode
        $CardCode = filter_input(INPUT_POST, 'CardCode', FILTER_SANITIZE_STRING);
        if ($CardCode === false) {
            // El valor ingresado no es válido
            // Manejar el error adecuadamente
        }

        // Consulta SQL para obtener los datos basados en el código
        $sql = "SELECT * FROM CONSULTA_CARTERA WHERE CardCode = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$CardCode]);

        if ($stmt->rowCount() === 0) {
            // No se encontraron resultados, mostrar mensaje de "a paz y salvo"
                  echo "Te encuentras a paz y salvo.";
        } else {
            ?>
             <div class="table-container">
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE</th>
                        <th>FACTURA</th>
                        <th>FECHA VENCIMIENTO</th>
                        <th>VALOR</th>
                        <th>FACTURA</th>
                        <th>ABONO</th>
                        <th>PAGO TOTAL</th>
                   
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $valor = $row['valor_formateado'];

                        $factura = htmlspecialchars($row['DocNum']);
                        $precio = htmlspecialchars($row['valor_formateado']) * 100; // Precio en centavos
                        $moneda = "COP"; // Moneda
                        $secreto_integridad = "prod_integrity_X5QR2RypaLStDR9fKzzJtWqrHmWMQTUn"; // Tu secreto de integridad
                        $nombre = htmlspecialchars($row['CardFName']);
                        // Concatenar los valores en el orden correcto
                        $cadena_concatenada = $factura . $precio . $moneda . $secreto_integridad;
                        
                        // Generar el hash SHA256 para la firma de integridad
                        $firma_integridad = hash("sha256", $cadena_concatenada);


// Formatear el número como peso (usando el símbolo de moneda y separadores de miles)
// Para pesos en dólares, por ejemplo:
$valor_formateado = number_format($valor, 2, ',', '.'); // Usa ',' para decimales y '.' para miles

// Si quieres incluir el símbolo de la moneda, por ejemplo, "$"
$valor_con_simbolo = '$' . $valor_formateado;
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['CardCode'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?php echo htmlspecialchars($row['CardName'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?php echo htmlspecialchars($row['DocNum'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?php echo htmlspecialchars($row['DocDueDate'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?php echo htmlspecialchars($valor_con_simbolo, ENT_QUOTES, 'UTF-8') ?></td>
                            <td>  <a href="<?php echo htmlspecialchars($row['U_HBT_VisorPublico'], ENT_QUOTES, 'UTF-8') ?>" target="_blank">
        <img src="imginicio/pdf.png" alt="Descripci�n de la imagen" width="30px">
    </a></td>

    <td>
    <button id="waybox-button" onclick="openModal('<?php echo htmlspecialchars($row['DocNum'], ENT_QUOTES, 'UTF-8'); ?>')">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793z"/>
        </svg>
        Pago parcial
    </button>
</td>



    <td>
    <?php
        echo "
        <script
            src='https://checkout.wompi.co/widget.js'
                data-render='button'
                data-public-key='pub_prod_vq6SWvyOjQMav2mrcWlKOye4BBueaS7Q'
                data-reference='$factura'
                data-amount-in-cents='$precio'
                data-currency='COP'
                data-signature:integrity='$firma_integridad'
              data-customer-data:full-name='$nombre'
        ></script>";

?>
        </td>

                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
                </div>
            <?php
        }

        $conn = null;
    } catch (PDOException $e) {
        echo "Error en la conexión o consulta: " . $e->getMessage();
    }
}
?>

<script>
        // Función para abrir el modal
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        // Función para cerrar el modal
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        // Función para manejar el envío del modal
        function submitModal() {
            var inputVal = document.getElementById("modalInput").value;
            alert("Valor ingresado: " + inputVal);
            closeModal(); // Cerrar el modal después de enviar
        }

        // Cerrar el modal si el usuario hace clic fuera de él
        window.onclick = function(event) {
            var modal = document.getElementById("myModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
<!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <p>Ingrese valor a pagar:</p>
        <input type="text" id="modalInput">
        <button class="modalInput" onclick="setAmount()">Continuar</button>
        <br><br>
        <div id="wompiButtonContainer"></div>
    </div>
</div>

<script>
  function openModal(factura) {
    // Save the factura in a global variable or pass it to the modal
    window.currentFactura = factura;
    document.getElementById('myModal').style.display = 'block';
}

function setAmount() {
    const inputValue = document.getElementById('modalInput').value;

    if (isNaN(inputValue) || inputValue <= 0) {
        alert('Por favor, ingrese un monto válido.');
        return;
    }

    const amountInCents = inputValue * 100;
    const factura = window.currentFactura;  // Use the factura from the clicked row
    const timestamp = Date.now();  // Generate a timestamp
    const uniqueReference = factura;  // Create a unique reference with timestamp

    fetch('getSignature.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            factura: uniqueReference,
            amountInCents: amountInCents,
            currency: 'COP',
            integrity_key: 'prod_integrity_X5QR2RypaLStDR9fKzzJtWqrHmWMQTUn'
        }),
    })
    .then(response => response.json())
    .then(data => {
        const existingScript = document.getElementById('wompiScript');
        if (existingScript) {
            existingScript.remove();
        }

        const script = document.createElement('script');
        script.id = 'wompiScript';
        script.src = 'https://checkout.wompi.co/widget.js';
        script.setAttribute('data-render', 'button');
        script.setAttribute('data-public-key', 'pub_prod_vq6SWvyOjQMav2mrcWlKOye4BBueaS7Q');
        script.setAttribute('data-reference', uniqueReference);
        script.setAttribute('data-amount-in-cents', amountInCents);
        script.setAttribute('data-currency', 'COP');
        script.setAttribute('data-signature:integrity', data.signature);
        script.setAttribute('data-customer-data:full-name', '<?php echo $nombre; ?>');

        // Append the script to the modal container
        document.getElementById('wompiButtonContainer').appendChild(script);

    })
    .catch(error => {
        console.error('Error fetching the signature:', error);
        alert('Ocurrió un error al obtener la firma de integridad.');
    });
}

</script>


</body>
</html>
