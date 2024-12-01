<?php
include('db.php');
session_start();

$id= $_GET['id'];
$query = "SELECT *FROM usuario WHERE id=$id";
$result= $conn->query($query);
$usuario= $result->fetch_assoc();

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $phone= $_POST['phone'];

    $query="UPDATE usuario SET usuario='$name', correo='$email',contraseña='$password', 
    telefono='$phone'WHERE id=$id";

    if($conn->query($query)==TRUE){
       /* $_SESSION['message']= 'Datos actualizados exitosamente';
        $_SESSION['message_type'] = 'warning';*/
        header('Location:controlusuario.php');
    }else{
        echo "Error de consulta";
    }
}

?>



<!-- Agregar un Formulario -->

<?php
include('includes/head.php');
?>
<div class="container mt-5">
        <h1>Editar usuarios</h1>


    <form action="updateusuario.php?id=<?php echo $id; ?>" method="POST">
        <div class="mb-3">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" VALUE="<?php echo $usuario ['usuario'];?>" require>
        </div>

        <div class="mb-3">
            <label for="email">Correo</label>
            <input type="text" name="email" class="form-control" VALUE="<?php echo $usuario['correo'];?>" require>
        </div>

        <div class="mb-3">
            <label for="password">Contraseña</label>
            <input type="text" name="password" class="form-control" VALUE="<?php echo $usuario['contraseña'];?>" require>
        </div>

        <div class="mb-3">
            <label for="phone">Teléfono</label>
            <input type="number" name="phone" class="form-control" VALUE="<?php echo $usuario['telefono'];?>" require>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Actualizar cambios</button>
        

     </form>

</div>




