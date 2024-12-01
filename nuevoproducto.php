<!-- AQUI VA EL HEAD.PHP -->

<?php include("includes/head.php")?>
<?php include("db.php");?>




<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      
<!-- AQUI VA EL SIDEBAR -->

<?php include("includes/sidebar.php")?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                
<!-- AQUI VA EK TOPBAR -->

<?php include("includes/topbar.php")?>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Nuevo Producto</h1>
                    <p class="mb-4">Sistema de Creación de Nuevos Productos<a target="_blank"
                            href="https://datatables.net"> -> Asistencia Técnica</a>.</p>

                </div>
                <!-- /.container-fluid -->
                  <!-- TABLA -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registro de Nuevo Producto</h6>


 <!-- MODAL DE INSERT -->

 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ingresar   </button>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Nuevo Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">

        <form action="controlinventario/createinventario.php" method="POST">

        <div class="mb-3">
            <label for="name">Producto</label>
            <input type="text" name="producto" class="form-control" require>
        </div>

        <div class="mb-3">
            <label for="name">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" require>
        </div>

        <div class="mb-3">
            <label for="name">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" require>
        </div>

        <div class="mb-3">
            <label for="name">Precio Unitario</label>
            <input type="number" step="0.01" name="precio_unitario" class="form-control" require>
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
            <input type="text" name="estado" class="form-control" require>
        </div>

        

      </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" name="submit" class="btn btn-primary">Agregar</button>

            </div>
      </form>

    </div>
  </div>
</div>

                            <!-- END MODAL -->





                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id_producto</th>
                                            <th>Producto</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th>Precio Unitario</th>
                                            <th>Categoria</th>
                                            <th>Proveedor</th>
                                            <th>Fecha Ingreso</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Id_producto</th>
                                            <th>Producto</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th>Precio Unitario</th>
                                            <th>Categoria</th>
                                            <th>Proveedor</th>
                                            <th>Fecha Ingreso</th>
                                            <th>Estado</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php include("controlinventario/selectableinventario.php")?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>









            </div>
            <!-- End of Main Content -->

           


            <!-- AQUI VA EL fooder -->

            <?php include("includes/footer.php")?>

            