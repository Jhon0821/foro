<!DOCTYPE html>
<html lang="en">

<head>





    <?php 

require('conexion.php');


if(isset($_GET['usuario'])){
    $sql="DELETE FROM tablausuario WHERE usuario=?";
    $smt=$pdo->prepare($sql); 
    $smt->execute(array($_GET['usuario']));
}



 
    


?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/validacion.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/633862d40b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <table border=1px class="table-mantenedor">
            <tr>
                <th>Usuario</th>
                <th>Clave </th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Tipo</th>
                <th>Nacionalidad</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
            <?php 
    $sql=$pdo->query("SELECT id_usuario, usuario, clave, nombre, apellido, tipo, nacionalidad, estado FROM tablausuario");
    
    foreach($sql as $listar){
    ?>
            <tr>

                <td><?php echo $listar['usuario'] ?></td>
                <td><?php echo $listar['clave'] ?></td>
                <td><?php echo $listar['nombre'] ?></td>
                <td><?php echo $listar['apellido'] ?></td>
                <td><?php echo $listar['tipo'] ?></td>
                <td><?php echo $listar['nacionalidad'] ?></td>
                <td><a style="color:backgound;green" href="mantenedorusuarios.php?id_usuario=<?php echo $listar['usuario']?>"><input type="button" class="btnestado" value="<?php echo $listar['estado'] ?>"   name="btnestado"></a></td>
              <?php 
              
              

              if(isset($_GET['id_usuario'])){
                  $sql="UPDATE tablausuario SET estado='inactivo' WHERE usuario=?"; 
                  $smt=$pdo->prepare($sql); 
                  $smt->execute(array($_GET['id_usuario']));
              }
             
            
              ?>
                
                <td><a class="fas fa-trash eliminar-mantenedor" href="mantenedorusuarios.php?usuario=<?php echo $listar['usuario']?>"> Eliminar</td></a>

            </tr>
            <?php } ?>
        </table>

        <div class="boton-mantenedor">
            <button class="btnregresarU"><a  href="admin.php" class="btnregresarU">Regresar</a></button>
            <button class="btncrearU"><a href="crearusuarios.php" >Crear Usuarios </a></button>
        </div>

    </form>
<p class="nota">NOTA: para cambiar el estado del usuario tiene que pulsar dos veces en la opcion de estado</p>
    
 
</body>

</html>