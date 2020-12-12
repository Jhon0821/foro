<!DOCTYPE html>
<html lang="en">
<?php 


require('conexion.php');

if(isset($_POST['btnregistrarse'])){

    $usuario=$_POST['user'];
    $contraseña=$_POST['contraseña'];
    $nombre=$_POST['txtnombre'];
    $apellido=$_POST['apellido'];
    $nacionalidad=$_POST['nacionalidad'];
    
    $sql=("SELECT * FROM tablausuario WHERE usuario='$usuario' AND nombre ='$nombre'");
    $smt=$pdo->prepare($sql);
    $smt->execute([$usuario,$nombre]);

    

    if($smt->rowcount()==0){
    $sql="INSERT INTO tablausuario(usuario, clave, nombre, apellido,  nacionalidad)VALUES(?,?,?,?,?)";
    $smt=$pdo->prepare($sql); 
    $smt->execute([$usuario, $contraseña, $nombre, $apellido,  $nacionalidad]);
    header('location:mensaje.php');
    }else{
    header('location:mensajeusuario.php');
    }

}

   




?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/validacion.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>

<body>
    <form action="formulario.php" method="post" onsubmit="return validacionform();">

      
        <div class="mantenedor">

        <header>
            <h1 class="formulario">Formulario de Registro </h1>
        </header>
            <div class=centrar>
                <label for="user" class="label-formulario">Usuario</label>
                <input type="text" name="user" id="user" placeholder="Usuario">
                <span id="erroruser"></span>
            </div>
            
            <div class=centrar>
                <label for="contraseña" class="label-formulario">Contraseña</label>
                <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña">
                <span id="errorcon"></span>
            </div>
            
            <div class=centrar>
                <label for="txtnombre" class="label-formulario">Nombre</label>
                <input type="text" name="txtnombre" id="txtnombre" placeholder="Nombre">
                <span id="errornombre"></span>
            </div>
            
            <div class=centrar>
                <label for="apellido" class="label-formulario"> Apellido</label>
                <input type="text" name="apellido" id="apellido" placeholder="Apellido">
                <span id="errorapellido"></span>
            </div>
           
           
            
            <div class=centrar>
            <label for="nacionalidad" class="label-formulario">Nacionalidad</label>
            <select name="nacionalidad" id="nacionalidad">
                <option value="">Seleccione</option>
                <option value="argentina">Argentina</option>
                <option value="afganistan">Afganistán</option>
                <option value="albania">Albania</option>
                <option value="alemania">Alemania</option>
                <option value="andorra">Andorra</option>
                <option value="angola">Angola</option>
                <option value="anguilla">Anguilla</option>
                <option value="argelia">Argelia</option>
                <option value="armenia">Armenia</option>
                <option value="aruba">Aruba</option>
                <option value="australia">Australia</option>
                <option value="austria">Austria</option>
                <option value="bahamas">Bahamas</option>
                <option value="barbados">Barbados</option>
                <option value="belgica">Bélgica</option>
                <option value="belice">Belice</option>
                <option value="benice">Benin</option>
                <option value="bolivia">Bolivia</option>
                <option value="botswana">Botswana</option>
                <option value="brasil">Brasil</option>
                <option value="bulgaria">Bulgaria</option>
                <option value="camboya">Camboya</option>
                <option value="camerun">Camerún</option>
                <option value="canada">Canadá</option>
                <option value="chad">Chad</option>
                <option value="chile">Chile</option>
                <option value="china">China</option>
                <option value="chipre">Chipre</option>
                <option value="colombia">Colombia</option>
                <option value="croacia">Croacia</option>
                <option value="cuba">Cuba</option>
                <option value="dinamarca">Dinamarca</option>
            </select>
            <span id="errornacionalidad"></span>
            </div>
           
            <div class="botoncentrar">
                <input type="submit" value="Registrarse" name="btnregistrarse">
                <input type="reset" value="Cancelar" name="btncancelar">
            </div>
        </div>
    </form>
</body>

</html>