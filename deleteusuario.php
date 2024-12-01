<?php
include('db.php');
session_start();

$id= $_GET['id'];

/*consulta de la base de datos*/
$query= "DELETE FROM usuario WHERE id=$id";

if($conn->query($query)==TRUE){
 $_SESSION['message']= 'Registro Eliminado Exitosamente';
 $_SESSION['message_type'] = 'danger';
        header("Location:controlusuario.php");
}else{
    echo "error de consulta";
}
 


?> 