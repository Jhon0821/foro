<?php 

require('conexion.php'); 



$usuario=$_POST['usuario']; 
$clave=$_POST['password']; 


$sql="SELECT *FROM tablausuario WHERE usuario ='$usuario' AND clave ='$clave'" ; 
$smt=$pdo->prepare($sql);
$smt->execute(); 




if($smt->rowcount()>0){

foreach($smt as $buscar){
    session_start(); 
    $_SESSION['usuario']=$buscar['usuario'];
    $_SESSION['tipo']=$buscar['tipo'];
    $_SESSION['nombre']=$buscar['nombre'];

    if($_SESSION['tipo']=="usuario"){
        header('location:usuario.php');
    }elseif($_SESSION['tipo']=="administrador"){
        header('location:admin.php');
    }
}
   

}else{
    echo "Usuario Y/O Password Incorrectos"; 
}


?>