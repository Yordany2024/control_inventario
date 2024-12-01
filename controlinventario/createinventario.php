<?php
include('../db.php');
session_start();



if(isset($_POST['submit'])){
    $producto = $_POST['producto'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio_unitario = $_POST['precio_unitario'];
    $categoria = $_POST['categoria'];
    $proveedor = $_POST['proveedor'];
    $estado = $_POST['estado'];
    
    

    $query = "INSERT INTO inventario (producto, descripcion, cantidad, precio_unitario,id_categoria,id_proveedor,estado)
     VALUES ('$producto', '$descripcion','$cantidad', '$precio_unitario','$categoria','$proveedor','$estado')";
    if($conn->query($query)==TRUE){

        /*$_SESSION['message']= 'Usuario creado exitosamente';
        $_SESSION['message_type'] = 'success'*/
        header('Location:../nuevoproducto.php');
    }else{
        echo"Error de conexion";
    }
}

?>