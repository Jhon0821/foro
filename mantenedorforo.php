<!DOCTYPE html>
<html lang="en">
<?php 

require('conexion.php'); 


?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/validacion.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>

<body>
    <form action="valida_usuario.php" method="post" onsubmit="return validausuario()">
        <div class="contenedor">

        <h3 class="iniciar">Iniciar Sesion</h3>
            <div class="posicionar">
                <label for="usuario" class="label">Usuario</label>
                <input type="text" name="usuario" id="usuario" placeholder="Usuario">
                <span id="errorusuario"></span>
            </div>
            <div class="posicionar">
                <label for="password" class="label"> Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Contraseña">
                <span id="errorpass"></span>
            </div>
            <div class="boton">
                <input type="submit" value="Ingresar" name="btningresar" id="botoningresar">
            </div>
            <div>
            <p class="cuenta">No tienes Cuenta? <a href="formulario.php" class="registrarse"> Registrate aqui</a></p>
            </div>
        </div>
    </form>
</body>

</html>