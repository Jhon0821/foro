<!DOCTYPE html>
<html lang="es">

<head>
    <?php 

require('conexion.php');




?>

    <?php 

 

session_start(); 

if(!isset($_SESSION['usuario']) || $_SESSION['tipo']!="usuario"){
    header('location:errorsesion.php');
}


?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/validacion.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/633862d40b.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Foro Abierto</h1>
        <h4>Bienvenido </h4> <?php echo $_SESSION['tipo'] . ' ' . $_SESSION['usuario']; ?> <br><a
            class="fas fa-sign-out-alt" href="cerrarsesion.php">
            Logout</a>
    </header>

    <form action="agregarforoU.php" method="post" onsubmit="return validacionU()">

        <div class="mantenedor-foro">

            <div>

                <div class="centrar-usuario">
                    <label for="usuario" class="label-usuario">Nombre</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Nombre">
                    <span id="errorusu"></span>
                </div>
                <div class="centrar-usuario">
                    <label for="fecha" class="label-usuario">Fecha</label>
                    <input type="date" name="fecha" id="fecha">
                    <span id="errorfecha"></span>
                </div>

                <div class="centrar-usuario">
                    <textarea name="mensaje" id="mensaje" cols="60" rows="10" placeholder="Escribe un Mensaje..."></textarea>
                    <span id="errormensaje"></span>
                </div>


            </div>

            <div class="boton-usuario">
                <input type="submit" value="Publicar" name="btnpublicar" id="btnpublicar">
            </div>

        </div>
        <div>
            <table border=1px class="table-usuario">
                <tr>
                    <th>Nombre</th><br>
                    <th>Fecha</th>
                    <th>Mensaje</th>
                </tr>
                <?php 
       $smt=$pdo->query("SELECT usuario, fecha, mensaje FROM tablaforo"); 
       
                foreach($smt as $listar){
        ?>
                <tr>
                    <td><?php echo $listar['usuario'] ?></td>
                    <td><?php echo $listar['fecha'] ?></td>
                    <td><?php echo $listar['mensaje'] ?></td>

                </tr>
                <?php } ?>

            </table>
        </div>
    </form>

</html>