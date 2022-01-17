<?php


?>

<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio De Sesión</title>
    <link type="text/css" rel="stylesheet" href="css/estilo.css">

</head>
<body>

    <div class="Cajamain">
        <div class="form-box">
            <div class="botones">
                <div id="btn"></div>
                <button class="btn-superior" onclick="logined()"">Login </button>
                <button class="btn-superior" onclick="registro()">Registro</button>
            </div>

            <form id="login" class="input-grupo">
                <input type="text" class="input-registro" placeholder="Correo" required>
                <input type="password" class="input-registro" placeholder="Introducir Contraseña" required>

                <button type="submit" class="submit-btn">Entrar</button>
            </form>
          <!--  <form id="registro"  class="input-grupo" >

                <input name="nombre" type="text" class="input-registro" placeholder="Nombre">

                <input name="correo" type="text" class="input-registro" placeholder="Correo Electronico">

                <input name="password" type="password" class="input-registro" placeholder="Contraseña">

                <input name="rpassword" type="password" class="input-registro" placeholder="Contraseña">
                <label>Videojuego que prefieres</label><br/>

                <button name="enviar" type="submit" class="submit-btn" value="Enviar">Enviar</button>

                </form> -->
        </div>
    </div>



    <script src="js/sesion.js"></script>

</body>
</html>