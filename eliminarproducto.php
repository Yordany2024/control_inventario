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
                    <h1 class="h3 mb-4 text-gray-800">Eliminar Producto</h1>
                    <p class="mb-4">Sistema de Eliminación de Productos<a target="_blank"
                    href="https://datatables.net"> -> Asistencia Técnica</a>.</p>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

                   <!-- DataTales Example -->
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Inventario</h6>
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
                                            <th>Operacion</th>
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
                                            <th>Operacion</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php include("controlinventario/selectableinventariodelete.php")?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            
            <!-- End of Main Content -->


            <!-- AQUI VA EL fooder -->

            <?php include("includes/footer.php")?>

            