<?php
include('db.php');
session_start();


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    

    $query = "INSERT INTO usuario(usuario, correo, contraseña, telefono) VALUES ('$name', '$email','$password', '$phone')";
    if($conn->query($query)==TRUE){
        /*$_SESSION['message']= 'Usuario creado exitosamente';
        $_SESSION['message_type'] = 'success'*/
        header('Location:controlusuario.php');
    }else{
        echo"Error de conexion";
    }
}

?>
