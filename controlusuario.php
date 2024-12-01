<?php


include("db.php");


?>


<!-- AQUI VA EL HEAD.PHP -->

<?php include("includes/head.php")?>


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
                    <h1 class="h3 mb-2 text-gray-800">Control Usuarios</h1>
                    <p class="mb-4">Sistema de Gestión de Usuarios <a target="_blank"
                            href="https://datatables.net"> -> Asistencia Técnica</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registro de Usuario</h6>



                            <!-- MODAL DE INSERT -->

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ingresar nuevo usuario</button>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Nuevo Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">

        <form action="createusuario.php" method="POST">
        <div class="mb-3">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" require>
        </div>

        <div class="mb-3">
            <label for="name">Correo</label>
            <input type="text" name="email" class="form-control" require>
        </div>

        <div class="mb-3">
            <label for="password">Contraseña</label>
            <input type="text" name="password" class="form-control" require>
        </div>

        <div class="mb-3">
            <label for="phone">Teléfono</label>
            <input type="number" name="phone" class="form-control" require>
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
</div>
                            <!-- END MODAL -->

                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>
                                   <!-- PIE DE PAGINA CON TITULOS
                                    
                                   <tfoot>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>    

                                    </tfoot>-->
                                    <tbody>

                                    <?php include("selectable.php")?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            
            <!-- AQUI VA EL fooder -->

            <?php include("includes/footer.php")?>
