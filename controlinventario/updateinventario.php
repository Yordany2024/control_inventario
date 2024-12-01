<?php
include('../db.php');
session_start();

$id= $_GET['id'];
$query = "SELECT *FROM inventario WHERE id_producto=$id";
$result= $conn->query($query);
$inventario= $result->fetch_assoc();

if(isset($_POST['submit'])){
    $producto = $_POST['producto'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio_unitario = $_POST['precio_unitario'];
    $categoria = $_POST['categoria'];
    $proveedor = $_POST['proveedor'];
    $estado = $_POST['estado'];
   

    $query="UPDATE inventario SET producto='$producto', descripcion='$descripcion',cantidad='$cantidad', 
    precio_unitario='$precio_unitario',id_categoria='$categoria',  id_proveedor='$proveedor', estado='$estado'
    WHERE id_producto=$id";

    if($conn->query($query)==TRUE){
       /* $_SESSION['message']= 'Datos actualizados exitosamente';
        $_SESSION['message_type'] = 'warning';*/
        header('Location:../editarproducto.php');
    }else{
        echo "Error de consulta";
    }
}

?>



<!-- Agregar un Formulario -->
<?php
include('../includes/head.php');
?>
<div class="container mt-5">
        <h1>Editar Producto</h1>
        
 

<form action="updateinventario.php?id=<?php echo $id; ?>" method="POST">
   
 
        <div class="mb-3">
            <label for="name">Producto</label>
            <input type="text" name="producto" class="form-control" VALUE="<?php echo $inventario ['producto'];?>" require>
        </div>

        <div class="mb-3">
            <label for="name">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" VALUE="<?php echo $inventario ['descripcion'];?>" require>
        </div>

        <div class="mb-3">
            <label for="name">Cantidad</label>
            <input type="text" name="cantidad" class="form-control" VALUE="<?php echo $inventario ['cantidad'];?>" require>
        </div>

        <div class="mb-3">
            <label for="name">Precio Unitario</label>
            <input type="text" step= "0.01" name="precio_unitario" class="form-control" VALUE="<?php echo $inventario ['precio_unitario'];?>" require>
        </div>

        <div class="mb-3">
        <?php
            $query = "SELECT id_categoria, nombre_categoria FROM categorias";
            $result = $conn->query($query);
            
            if($result->num_rows>0){
                echo '<label for="categorias">Categoria</label>';
                echo '<select name="categoria" class="form-select">';
                while ($row=$result->fetch_assoc()){
                    echo '<option value="'.$row ['id_categoria'].'">'.$row ['nombre_categoria'].'</option>';
                }
                echo '</select>';
            }else{
                echo 'No hay Categoria';
            }

            ?>    


        </div>

        <div class="mb-3">
        <?php
            $query = "SELECT id_proveedor, nombre_proveedor FROM proveedor";
            $result = $conn->query($query);
            
            if($result->num_rows>0){
                echo '<label for="proveedor">Proveedor</label>';
                echo '<select name="proveedor" class="form-select">';
                while ($row=$result->fetch_assoc()){
                    echo '<option value="'.$row ['id_proveedor'].'">'.$row ['nombre_proveedor'].'</option>';
                }
                echo '</select>';
            }else{
                echo 'No hay Proveedores';
            }

            ?>
        </div>

        <div class="mb-3">
            <label for="name">Estado</label>
            <input type="text" name="estado" class="form-control" VALUE="<?php echo $inventario ['estado'];?>" require>
        </div>
        

       




        <button type="submit" name="submit" class="btn btn-success">Actualizar cambios</button>
        

     </form>
</div>




