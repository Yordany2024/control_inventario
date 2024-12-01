<?php
include('../db.php');
session_start();

$id= $_GET['id'];

/*consulta de la base de datos*/
$query= "DELETE FROM inventario WHERE id_producto=$id";

if($conn->query($query)==TRUE){
 $_SESSION['message']= 'Registro Eliminado Exitosamente';
 $_SESSION['message_type'] = 'danger';
        header("Location:../eliminarproducto.php");
}else{
    echo "error de consulta";
}
 


?> 