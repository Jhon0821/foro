<!DOCTYPE html>
<html lang="en">

<head>





    <?php 
require('conexion.php');


if(isset($_POST['btncrearusuario'])){
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['clave'];
    $nombre=$_POST['Nombre'];
    $apellido=$_POST['apellido'];
    $tipo=$_POST['tipo'];

    $sql=("SELECT *FROM tablausuario WHERE usuario='$usuario' AND tipo='$tipo'");
    $smt=$pdo->prepare($sql); 
    $smt->execute([$usuario, $tipo]);

    if($smt->rowcount()==0){
        $sql="INSERT INTO tablausuario(usuario, clave, nombre, apellido, tipo) values(?,?,?,?,?)";
        $smt=$pdo->prepare($sql);
        $smt->execute([$usuario,$contraseña,$nombre,$apellido,$tipo]);
        header('location:mantenedorusuarios.php');
    }else{
        echo "No puede Crear Usuarios Existentes, Intentelo mas tarde"; 
    }
}

?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/validacion.js"></script>
    <title>Document</title>
</head>

<body>
    <form action="" method="post" onsubmit="return validacrearU();">

    

        <div class="contenedor-crear">
            <h2 class="titulo-crear">Creacion de Usuarios</h2>

            <div class="centrar-crear">
                <label for="usuario " class="label-crear">Usuario</label>
                <input type="text" name="usuario" id="usuario" placeholder="Usuario">
                <span id="error-usuario"></span>
            </div>
            <div class="centrar-crear">
                <label for="clave " class="label-crear">Contraseña</label>
                <input type="password" name="clave" id="clave" placeholder="Contraseña">
                <span id="error-contraseña"></span>
            </div>
            <div class="centrar-crear">
                <label for="Nombre" class="label-crear">Nombre</label>
                <input type="text" name="Nombre" id="Nombre" placeholder="Nombre">
                <span id="error-nombre"></span>
            </div>
            <div class="centrar-crear">
                <label for="apellido " class="label-crear">Apellido</label>
                <input type="text" name="apellido" id="apellido" placeholder="Apellido">
                <span id="error-apellido"></span>
            </div>
            <div class="centrar-crear">
            <label for="tipo" class="label-crear">Tipo</label>
                <select name="tipo" id="tipo">
                    <option value="">Seleccione</option>
                    <option value="usuario">Usuario</option>
                    <option value="administrador">Administrador</option>
                </select>
                <span id="error-tipo"></span>
            </div>
          
            <div>

                <input type="submit" value="Crear Usuario"name="btncrearusuario" id="btncrearusuario">
            </div>
        </div>

    </form>
</body>

</html>