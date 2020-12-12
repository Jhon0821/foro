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
        $sql="INSERT INTO tablaforo(usuario, fecha, mensaje) VALUES(?,?,?)";
    $smt=$pdo->prepare($sql);
    $smt->execute([$usuario,$fecha,$mensaje]);
    header('location:admin.php'); 
    }else{
        echo "No puede Publicar Ningun Foro, Existen Registros";
    }
    
    
    }


?>

<a href="admin.php">Volver a la pagina del Administrador</a>