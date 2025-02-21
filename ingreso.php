<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sesion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="./imagenes/arriba.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/login.css">
	<script src="./js/custom.js"></script>
<style>
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
    <div class="fondo"></div>
    <div class="formulario">
    <form method="post" action="login.php" class="form_main">
        <img class="perfil" src="./imagenes/logosky.png" alt="">
        <h1>Inicia sesion</h1>
        <label for="">Usuario</label>
        <input type="text" id="username" name="username" class="input1" placeholder="Email" required>
        <br>
        <label for="">Contraseña</label>
        <input type="password" id="password" name="password" class="input1" placeholder="Password" required>
        <br>
        <input class="boton" type="submit" value="Ingresar">
    </form>
    </div>

</body>
</html>