<?php 

require('conexion.php');


if(isset($_POST['btnpublicar'])){

    $usuario=$_POST['usuario'];
    $fecha=$_POST['fecha'];
    $mensaje=$_POST['mensaje'];
    $sql="SELECT *FROM tablaforo WHERE usuario ='$usuario'";
    $smt=$pdo->prepare($sql); 
    $smt->execute([$usuario,$fecha,$mensaje]);

    if($smt->rowcount()==0){

    $sql="INSERT INTO tablaforo( usuario, fecha, mensaje) VALUES(?,?,?)";
    $smt=$pdo->prepare($sql);
    $smt->execute([$usuario,$fecha,$mensaje]);
    header('location:usuario.php');
    

    }else{
       echo "No puede publicar un Foro Ya existe en nuestro registro";
    }    
    
    
    }




?>

<a href="usuario.php">Volver a la pagina Usuario</a>