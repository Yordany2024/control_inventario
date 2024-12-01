<?php


include("db.php");
session_start();


$correo = $_POST['email'];
$contraseña = $_POST['password'];


$query = "SELECT *FROM usuario WHERE correo = ? AND contraseña = ? LIMIT 1";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $correo, $contraseña);
$stmt->execute();
$result = $stmt->get_result();


if($result->num_rows==1){
    $_SESSION['message'] = 'Acceso correcto';
    $_SESSION['message_type'] = 'success';
    $_SESSION['redirect'] = true;
    $_SESSION['correo'] = $correo;

    
header("Location:home.php");
    
}else{
    $_SESSION['message'] = 'Acceso incorrecto';
    $_SESSION['message_type'] = 'danger';
    $_SESSION['redirect'] = false;
    

};


?>


<?php
       
   

        if(isset($_SESSION['message'])){?>

            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>   
    
    <?php
         if(isset($_SESSION['redirect']) && $_SESSION['redirect']==true){?>
         <script>
            setTimeout(function(){
                
            },1000);
        </script>
        

    <?php } session_unset(); }?>
    <!-- end alert conf. -->