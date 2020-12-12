<!DOCTYPE html>
<html lang="en">

<head>

    <?php 

require('conexion.php');
session_start(); 





if(!isset($_SESSION['usuario']) || $_SESSION['tipo']!="administrador"){
    header('location:errorsesion.php');
}


if(isset($_GET['id_usuario'])){

    
    $sql=" DELETE  FROM tablaforo WHERE usuario =?";
    $smt=$pdo->prepare($sql); 
    $smt->execute(array($_GET['id_usuario'])); 
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

    <Header>

        <h1 class="admin-foro">Foro Abierto</h1>

        <h4 class="admin-bienvenido">Bienvenido </h4><?php echo $_SESSION['tipo'].' '.$_SESSION['usuario'];?><br>
        <a class="admin-admin fas fa-sign-out-alt" href="cerrarsesion.php"> Logout</a><br>
        <a class=" fas fa-users mantenedor-usuarios" href="mantenedorusuarios.php" id="admin-mant"> Mantenedor Usuarios</a>
        <div>
            <label for="avatar">Foto de Perfil</label>
            <input type="file" name=imagen>
        </div>
    </Header>
    <form action="agregarforoA.php" method="post" enctype="multipart/form-data" onsubmit="return validarA();">

        <div class="mantenedor-admin">

            <div >

                <div class="centrar-admin">
                    <label for="usuario" class="label-admin">Nombre</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Nombre">
                    <span id="errorU"></span>

                </div>
                <div class="centrar-admin">
                    <label for="fecha" class="label-admin">Fecha</label>
                    <input type="date" name="fecha" id="fecha">
                    <span id="errorF"></span>
                </div>
                <div class="centrar-admin">

                </div class="centrar-admin">
                <textarea name="mensaje" id="mensaje" cols="60"  rows="10"
                    placeholder="Escribe tu mensaje..."></textarea>
                <span id="errorM"></span>

            </div>

            <div class="boton-admin">
                <input type="submit" value="Publicar" name="btnpublicar" id="btnpublicar">
            </div>

        </div>
        <div>
            <table border=1px class="table-admin">

                <tr>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Mensaje</th>
                    <th>Accion</th>
                </tr>

                <?php 
                $sql=$pdo->query("SELECT usuario, fecha, mensaje FROM tablaforo"); 

                foreach($sql as $listar){
                ?>
                <tr>
                    <td><?php echo $listar['usuario'] ?></td>
                    <td><?php echo $listar['fecha'] ?></td>
                    <td><?php echo $listar['mensaje'] ?></td>
                    <td><a class="fas fa-trash eliminar-admin" href="admin.php?id_usuario=<?php echo $listar['usuario'];?>"> Eliminar</td></a>
                </tr>
                <?php } ?>
            </table>




        </div>

    </form>

</body>

</html>